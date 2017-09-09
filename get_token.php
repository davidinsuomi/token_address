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
    $omise_go->name = "OMG";
    $omise_go->table_name = "omg_tbl";
    $omise_go->url = "https://etherscan.io/token/OmiseGo";

    $qtum = new Token();
    $qtum->name = "Qtum";
    $qtum->table_name = "qtum_tbl";
    $qtum->url = "https://etherscan.io/token/Qtum";

    $golem = new Token();
    $golem->name = "Golem";
    $golem->table_name = "golem_tbl";
    $golem->url = "https://etherscan.io/token/Golem";

    $tokens = array($stox, $omise_go, $qtum, $golem);

    return $tokens;
}
?>