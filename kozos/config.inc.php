<?php
//oldal címe
$ablakcim = [
    'cim' => 'vaszilijedc.hu'
];

//fejléc adatai
$fejlec = [
    'cim'   => 'vaszilijedc.hu',
    'motto' => 'Web-programozás'
];

//front controller routing
$oldalak = array(
    '/' => ['fajl' => 'cimlap', 'szoveg' => 'Főoldal'],
    'tamogatas' => ['fajl' => 'tamogatas', 'szoveg' => 'Támogatás'],
);