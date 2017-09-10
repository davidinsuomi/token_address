<?php
/**
 * Created by PhpStorm.
 * User: weiding
 * Date: 07/09/2017
 * Time: 22:18
 */
function init_tokens() {
    $stox  = new Token();
    $stox->name = "STX";
    $stox->url = "https://etherscan.io/token/0x006bea43baa3f7a6f765f14f10a1a1b08334ef45";
    $stox->table_name = "stx_tbl";

    $omise_go = new Token();
    $omise_go->name = "OmiseGO";
    $omise_go->description = "OmiseGO (OMG) is a public Ethereum-based financial technology for use in mainstream digital wallets";
    $omise_go->table_name = "omg_tbl";
    $omise_go->url = "https://etherscan.io/token/OmiseGo";

    $qtum = new Token();
    $qtum->name = "Qtum";
    $qtum->description = "Build Decentralized Applications that Simply Work Executable on mobile devices, compatible with major existing blockchain ecosystem";
    $qtum->table_name = "qtum_tbl";
    $qtum->url = "https://etherscan.io/token/Qtum";

    $golem = new Token();
    $golem->name = "Golem";
    $golem->description = "Golem is going to create the first decentralized global market for computing power";
    $golem->table_name = "golem_tbl";
    $golem->url = "https://etherscan.io/token/Golem";


    $tenxpay = new Token();
    $tenxpay->name = "TenXPay";
    $tenxpay->description = "TenX connects your blockchain assets for everyday use. TenX’s debit card and banking licence will allow us to be a hub for the blockchain ecosystem to connect for real-world use cases.";
    $tenxpay->table_name = "tenxpay_tbl";
    $tenxpay->url = "https://etherscan.io/token/TenXPay";

    $mkr = new Token();
    $mkr->name = "MKR";
    $mkr->description = "Maker is a Decentralized Autonomous Organization that creates and insures the dai stablecoin on the Ethereum blockchain";
    $mkr->table_name = "mkr_tbl";
    $mkr->url = "https://etherscan.io/token/MKR";

    $rep = new Token();
    $rep->name = "REP";
    $rep->description = "Augur combines the magic of prediction markets with the power of a decentralized network to create a stunningly accurate forecasting tool";
    $rep->table_name = "rep_tbl";
    $rep->url = "https://etherscan.io/token/REP";

    $bat = new Token();
    $bat->name = "REP";
    $bat->description = "The Basic Attention Token is the new token for the digital advertising industry.";
    $bat->table_name = "bat_tbl";
    $bat->url = "https://etherscan.io/token/BAT";

    $iconomi = new Token();
    $iconomi->name = "ICONOMI";
    $iconomi->description = "ICONOMI Digital Assets Management platform enables simple access to a variety of digital assets and combined Digital Asset Arrays";
    $iconomi->table_name = "iconomi_tbl";
    $iconomi->url = "https://etherscan.io/token/ICONOMI";

    $civic= new Token();
    $civic->name = "Civic";
    $civic->description = "Giving businesses and individuals the tools to control and protect identities";
    $civic->table_name = "civic_tbl";
    $civic->url = "https://etherscan.io/token/Civic";

    $tokens = array($stox, $omise_go, $qtum, $golem);

    return $tokens;
}
?>