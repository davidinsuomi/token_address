<?php
/**
 * Created by PhpStorm.
 * User: weiding
 * Date: 01/09/2017
 * Time: 22:49
 */
require_once  'login.php';
require_once 'Token.php';
require_once  'get_token.php';

$tokens = init_tokens();
foreach($tokens as $token) {
    $conn = mysqli_connect($hn, $un, $pw, $db);
    if ($conn->connect_error)
        die($conn->connect_error);
    $sql = "SELECT * from " . $token->table_name . " ORDER BY time_stamp DESC LIMIT 1";
    //echo $sql . "<br>";
    $retval = mysqli_real_query($conn, $sql);
    if (!$retval) {
        echo "failed \n";
        die('Could not enter data:' . mysqli_error($conn));
    }
    $result = mysqli_store_result($conn);
    while ($row = mysqli_fetch_assoc($result)) {
        $token->address_num = $row["num_of_address"];
        //echo $row["num_of_address"] . "time stamp " . $row["time_stamp"] . "<br>";
    }
    mysqli_close($conn);
}
//echo "fetch today's points\n";
/* get today's pointers from database */
foreach($tokens as $token) {
    $token->points = array();
    $conn = mysqli_connect($hn, $un, $pw, $db);
    if ($conn->connect_error)
        die($conn->connect_error);
    $sql = "SELECT * from " . $token->table_name . " WHERE DATE(time_stamp) >=(CURDATE() - INTERVAL 1 DAY)"; 
    //echo $sql . "<br>";
    $retval = mysqli_real_query($conn, $sql);
    if (!$retval) {
        echo "failed \n";
        die('Could not enter data:' . mysqli_error($conn));
    }
    $result = mysqli_store_result($conn);
    $first_row = true;
    while ($row = mysqli_fetch_assoc($result)) {
        if($first_row == true){
           $first_row = false;
           $token->midnight_address =$row["num_of_address"];
        }
        //echo $row["num_of_address"] . "time stamp " . $row["time_stamp"] . "<br>";
        $a = array(strtotime($row["time_stamp"]),$row["num_of_address"]);
        array_push($token->points,$a);
    }
    mysqli_close($conn);
}

//var_dump($tokens);
//echo "----JSON START----\n";
echo json_encode($tokens);
//echo "----JSON END----\n";
/*
echo "<table style=\"width:100%\"><tr><th>Name</th><th>address number</th><th>Change</th></tr>";
foreach($tokens as $token) {
     //echo "<tr><td>1</td><td>2</td><td>3%</td></tr>";
    echo "<tr><td>" .$token->name."</td><td>". $token->address_num."</td><td>12%</td></tr>";
}
echo "</table>";
*/
?>
