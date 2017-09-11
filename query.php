<?php
/**
 * Created by PhpStorm.
 * User: weiding
 * Date: 02/09/2017
 * Time: 10:42
 */
require_once  'login.php';
$conn = new mysqli($hn,$un,$pw,$db);
if($conn->connect_error)
    die($conn->connect_error);

$sql = "SELECT * FROM stx_tbl";
$result = $conn->query($sql);
$data = array();
if($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        //echo "num: " . $row["num_of_address"] . " Date: " . $row["time_stamp"]."<br>";
        $a = array(strtotime($row["time_stamp"]),$row["num_of_address"]);
        array_push($data,$a);
    }
}
else{
        echo "0 results";
}

echo json_encode($data);
$conn->close();

?>
