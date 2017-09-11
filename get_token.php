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
    $stox->description = "The Future of Prediction Markets. Stratis king holds it";
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

    $eos= new Token();
    $eos->name = "EOS";
    $eos->description = "The Most Powerful Infrastructure for Decentralized Applications";
    $eos->table_name = "eos_tbl";
    $eos->url = "https://etherscan.io/token/EOS";

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
    $bat->name = "bat";
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

    $gnosis = new Token();
    $gnosis->name = "Gnosis";
    $gnosis->description = "Crowd Sourced Wisdom - The next generation blockchain network. Speculate on anything with an easy-to-use prediction market";
    $gnosis->table_name = "gnosis_tbl";
    $gnosis->url = "https://etherscan.io/token/Gnosis";

    $oxproject= new Token();
    $oxproject->name = "0xproject";
    $oxproject->description = "The Protocol for Trading Tokens";
    $oxproject->table_name = "zrx_tbl";
    $oxproject->url = "https://etherscan.io/token/ZRX";

    $snt = new Token();
    $snt->name = "SNT";
    $snt->description = "SNT - Status Network";
    $snt->table_name = "snt_tbl";
    $snt->url = "https://etherscan.io/token/StatusNetwork";

    $bancor = new Token();
    $bancor->name = "Bancor";
    $bancor->description = "Bancor Protocol is a standard for a new generation of cryptocurrencies called Smart Tokens";
    $bancor->table_name = "bancor_tbl";
    $bancor->url = "https://etherscan.io/token/Bancor";

    $funfair = new Token();
    $funfair->name = "FunFair";
    $funfair->description = "FunFair is a decentralised gaming platform powered by Ethereum smart contracts";
    $funfair->table_name = "funfair_tbl";
    $funfair->url = "https://etherscan.io/token/FunFair";

    $monaco = new Token();
    $monaco->name = "Monaco";
    $monaco->description = "Monaco is a cryptocurrency card. Spend and send money globally at interbank exchange rates.";
    $monaco->table_name = "monaco_tbl";
    $monaco->url = "https://etherscan.io/token/Monaco";

    $singulardtv= new Token();
    $singulardtv->name = "SNGLS";
    $singulardtv->description = "A Blockchain Entertainment Studio, Smart Contract Rights Management Platform and Video On-Demand Portal";
    $singulardtv->table_name = "sngls_tbl";
    $singulardtv->url = "https://etherscan.io/token/SNGLS";

    $aragon = new Token();
    $aragon->name = "Aragon";
    $aragon->description = "Create and manage unstoppable organizations. Aragon lets you manage entire organizations using the blockchain. This makes Aragon organizations more efficient than their traditional counterparties.";
    $aragon->table_name = "aragon_tbl";
    $aragon->url = "https://etherscan.io/token/Aragon";

    $bitquence = new Token();
    $bitquence->name = "Bitquence";
    $bitquence->description = "People-powered cryptocurrency services for the blockchain";
    $bitquence->table_name = "bitquence_tbl";
    $bitquence->url = "https://etherscan.io/token/Bitquence";

    $wings= new Token();
    $wings->name = "Wings";
    $wings->description = "A decentralized platform to create, join and manage projects";
    $wings->table_name = "wings_tbl";
    $wings->url = "https://etherscan.io/token/WINGS";

    $edgeless = new Token();
    $edgeless->name = "Edgeless";
    $edgeless->description = "The Ethereum smart contract-based that offers a 0% house edge and solves the transparency question once and for all.";
    $edgeless->table_name = "edgeless_tbl";
    $edgeless->url = "https://etherscan.io/token/Edgeless";

    $storj = new Token();
    $storj->name = "Storj";
    $storj->description = "Blockchain-based, end-to-end encrypted, distributed object storage, where only you have access to your data";
    $storj->table_name = "storj_tbl";
    $storj->url = "https://etherscan.io/token/Storj";

    $rlc= new Token();
    $rlc->name = "RLC";
    $rlc->description = "Blockchain Based distributed cloud computing";
    $rlc->table_name = "rlc_tbl";
    $rlc->url = "https://etherscan.io/token/RLC";

    $melon = new Token();
    $melon->name = "melon";
    $melon->description = "The Melon protocol is a blockchain protocol for digital asset management built on the Ethereum platform";
    $melon->table_name = "melon_tbl";
    $melon->url = "https://etherscan.io/token/Melon";

    $districtox= new Token();
    $districtox->name = "districtox";
    $districtox->description = "A network of decentralized markets and communities. Create, operate, and govern. Powered by Ethereum, Aragon, and IPFS.";
    $districtox->table_name = "districtox_tbl";
    $districtox->url = "https://etherscan.io/token/district0x";

    $vslice= new Token();
    $vslice->name = "vSlice";
    $vslice->description = "An Ethereum Gaming Platform Token";
    $vslice->table_name = "vslice_tbl";
    $vslice->url = "https://etherscan.io/token/vSlice";

    $tokencard= new Token();
    $tokencard->name = "Tokencard";
    $tokencard->description = "The All Powerful Smart Contract Powered Debit Card";
    $tokencard->table_name = "tokencard_tbl";
    $tokencard->url = "https://etherscan.io/token/TokenCard";

    $taas = new Token();
    $taas->name = "Taas Fund";
    $taas->description = "TaaS is a tokenized closed-end fund designed to reduce the risks and technical barriers of investing in the blockchain space.";
    $taas->table_name = "taas_tbl";
    $taas->url = "https://etherscan.io/token/TAAS";

    $firstBlood = new Token();
    $firstBlood->name = "FirstBlood";
    $firstBlood->description = "FirstBlood.io (“FirstBlood”) is a decentralized Esports gaming platform that is powered by the blockchain";
    $firstBlood->table_name = "firstblood_tbl";
    $firstBlood->url = "https://etherscan.io/token/FirstBlood";

    $adtoken= new Token();
    $adtoken->name = "AdToken";
    $adtoken->description = "adChain is a browser agnostic Ethereum based solution for digital advertising that seamlessly integrates with pre-existing RTB and programmatic industry standards.";
    $adtoken->table_name = "adtoken_tbl";
    $adtoken->url = "https://etherscan.io/token/AdToken";

    $trustcoin = new Token();
    $trustcoin->name = "Trustcoin";
    $trustcoin->description = "A platform for Trusted Lending Circles, powered by people and blockchain";
    $trustcoin->table_name = "trustcoin_tbl";
    $trustcoin->url = "https://etherscan.io/token/Trustcoin";

    $etheroll= new Token();
    $etheroll->name = "Etheroll";
    $etheroll->description = "Provably fair online Ether gaming on the Ethereum Blockchain";
    $etheroll->table_name = "etheroll_tbl";
    $etheroll->url = "https://etherscan.io/token/DICE";

    $lunyr= new Token();
    $lunyr->name = "Lunyr";
    $lunyr->description = "Lunyr is an Ethereum-based decentralized world knowledge base which rewards users with app tokens for peer-reviewing and contributing information";
    $lunyr->table_name = "lunyr_tbl";
    $lunyr->url = "https://etherscan.io/token/Lunyr";

    $xaurum= new Token();
    $xaurum->name = "Xaurum";
    $xaurum->description = "Xaurum is unit of value on the golden blockchain, it represents an increasing amount of gold and can be exchanged for it by melting";
    $xaurum->table_name = "xaurum_tbl";
    $xaurum->url = "https://etherscan.io/token/Xaurum";

    $humaniq= new Token();
    $humaniq->name = "Humaniq";
    $humaniq->description = "Humaniq aims to be a simple and secure 4th generation mobile bank.";
    $humaniq->table_name = "humaniq_tbl";
    $humaniq->url = "https://etherscan.io/token/Humaniq";

    $santiment= new Token();
    $santiment->name = "Santiment";
    $santiment->description = "A Better Way to Trade Crypto-Markets - Market Datafeeds, Newswires, and Crowd Sentiment Insights for the Blockchain World";
    $santiment->table_name = "santiment_tbl";
    $santiment->url = "https://etherscan.io/token/SAN";

    $time = new Token();
    $time->name = "TIME";
    $time->description = "ChronoBank.io is a wide-ranging blockchain project, aimed at disrupting the HR/recruitment/finance industries";
    $time->table_name = "time_tbl";
    $time->url = "https://etherscan.io/token/TIME";

    $swt= new Token();
    $swt->name = "SWT";
    $swt->description = "Swarm City is a decentralized peer to peer sharing economy";
    $swt->table_name = "swt_tbl";
    $swt->url = "https://etherscan.io/token/SwarmCity";

    $guppy= new Token();
    $guppy->name = "Guppy";
    $guppy->description = "Matchpool is a platform that creates human connections";
    $guppy->table_name = "guppy_tbl";
    $guppy->url = "https://etherscan.io/token/Guppy";

    $bcap= new Token();
    $bcap->name = "Bcap";
    $bcap->description = "Blockchain Capital is a pioneer and the premier venture capital firm investing in Blockchain enabled technology";
    $bcap->table_name = "bcap_tbl";
    $bcap->url = "https://etherscan.io/token/BCAP";

    $nimiqnetwork= new Token();
    $nimiqnetwork->name = "NimiqNetwork";
    $nimiqnetwork->description = "World's first Browser-based Blockchain & Ecosystem";
    $nimiqnetwork->table_name = "nimiqnetwork_tbl";
    $nimiqnetwork->url = "https://etherscan.io/token/NimiqNetwork";

    $pluton= new Token();
    $pluton->name = "Pluton";
    $pluton->description = "With Plutus Tap & Pay, you can pay at any NFC-enabled merchant";
    $pluton->table_name = "pluton_tbl";
    $pluton->url = "https://etherscan.io/token/Pluton";




    //$tokens= array($stox, $omise_go, $qtum, $golem);

    $tokens= array($stox, $omise_go, $qtum, $golem, $eos
    ,$tenxpay, $mkr,$rep,$bat, $iconomi,$civic,$gnosis,$oxproject,$snt,$bancor,
    $funfair,$monaco,$singulardtv,$aragon,$bitquence,$wings,$edgeless,$storj,
    $rlc,$melon,$districtox,$vslice,$tokencard,$taas,$firstBlood,$adtoken,$trustcoin,
    $etheroll,$lunyr,$xaurum,$humaniq,$santiment,$time,$swt,$guppy,$nimiqnetwork,$pluton);

    return $tokens;
}
?>
