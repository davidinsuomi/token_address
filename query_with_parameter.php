<?php
/**
 * Created by PhpStorm.
 * User: weiding
 * Date: 02/09/2017
 * Time: 10:42
 */
require_once  'login.php';
require_once 'Token.php';
require_once  'get_token.php';

function find_table_name($token_name)
{
    $tokens = init_tokens();
    foreach ($tokens as $token) {
        if ($token_name == $token->name) {
            return $token;
        }
    }
    return NULL;
}
if(isset($_GET['token'])){
    $token_name = $_GET['token'];
}else{
    return;
}
$found_token = find_table_name($token_name);
if($found_token == NULL){
    return;
}
$conn = mysqli_connect($hn, $un, $pw, $db);

if($conn->connect_error)
    die($conn->connect_error);

$sql = "SELECT * FROM ".$found_token->table_name;
$result = mysqli_real_query($conn, $sql);
if (!$result) {
    die('Could not enter data:' . mysqli_error($conn));
}
$data = array();
$result = mysqli_store_result($conn);

while ($row = mysqli_fetch_assoc($result)) {
    //echo "num: " . $row["num_of_address"] . " Date: " . $row["time_stamp"]."<br>";
    $a = array(strtotime($row["time_stamp"]),$row["num_of_address"]);
    array_push($data,$a);
}


echo json_encode($data);
$conn->close();
?>


