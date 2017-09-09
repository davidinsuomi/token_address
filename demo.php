<?php
/**
 * Created by PhpStorm.
 * User: weiding
 * Date: 01/09/2017
 * Time: 22:49
 */
require_once  'login.php';
$conn = new mysqli($hn,$un,$pw,$db);
if($conn->connect_error)
    die($conn->connect_error);
$url = "https://etherscan.io/token/0x006bea43baa3f7a6f765f14f10a1a1b08334ef45";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
$output = curl_exec($curl);
curl_close($curl);
$dom = new DOMDocument;
libxml_use_internal_errors(true);
$dom->loadHTML($output);
libxml_clear_errors();
$item = $dom->getElementById("ContentPlaceHolder1_divSummary")->getElementsByTagName("td");
/*
echo $item->item(0)->nodeValue;
echo $item->item(1)->nodeValue;
echo $item->item(2)->nodeValue;
echo $item->item(3)->nodeValue;
echo $item->item(4)->nodeValue;
*/
$number_of_address = $item->item(5)->nodeValue;
preg_match('!\d+!', $number_of_address, $no);
echo $no[0];
$sql = "INSERT INTO stx_tbl".
    "(num_of_address,time_stamp)"."VALUES". "($no[0],now())";

echo $sql;
$retval = mysqli_real_query($conn, $sql);
if(!$retval){
    die('Could not ehter data:'. mysqli_error($conn));
}

echo "enter data successfully\n";

mysqli_close($conn);
?>