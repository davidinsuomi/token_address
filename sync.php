<?php
/**
 * Created by PhpStorm.
 * User: weiding
 * Date: 01/09/2017
 * Time: 22:49
 */
require_once  'login.php';
require_once 'Token.php';
require_once 'get_token.php';
$conn = new mysqli($hn,$un,$pw,$db);
if($conn->connect_error)
    die($conn->connect_error);

function fecth_data($tokens)
{
    foreach($tokens as $token){
        $url = $token->url;
        echo $url."<br>";
        $table = $token->table_name;
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $output = curl_exec($curl);
        curl_close($curl);
        $dom = new DOMDocument;
        libxml_use_internal_errors(true);
        $dom->loadHTML($output);
        libxml_clear_errors();
        $item = $dom->getElementById("ContentPlaceHolder1_divSummary")->getElementsByTagName("td");
        $number_of_address = $item->item(5)->nodeValue;
        preg_match('!\d+!', $number_of_address, $no);
        $token->address_num =$no[0];
        echo $token->address_num."<br>";
    }
    return $tokens;
}

$tokens = init_tokens();
$tokens = fecth_data($tokens);
foreach($tokens as $token){
    $sql = "INSERT INTO ".$token->table_name."(num_of_address,time_stamp)"."VALUES". "($token->address_num,now())";
    echo $sql."<br>";
    $retval = mysqli_real_query($conn, $sql);
    if(!$retval){
        die('Could not ehter data:'. mysqli_error($conn));
    }
    echo "enter data successfully\n";
}
mysqli_close($conn);
?>