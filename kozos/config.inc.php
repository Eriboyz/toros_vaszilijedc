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
    'kepek' => ['fajl' => 'kepek', 'szoveg' => 'Képek'],
    'feltoltes' => ['fajl' => 'kepek', 'szoveg' => 'Feltöltés', 'rejtett' => true],
    'kapcsolat' => ['fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat'],
    'uzenet' => ['fajl' => 'uzenet', 'szoveg' => 'Üzenet', 'rejtett' => true],
    'uzenetek' => ['fajl' => 'uzenetek', 'szoveg' => 'Üzenetek'],
);

//képekhez beállítások
$MAPPA = 'kepek/';
$TIPUSOK = ['.jpg', '.jpeg', '.png', '.webp'];
$MEDIATIPUSOK = ['image/jpeg', 'image/png', 'image/webp'];
$DATUMFORMA = "Y.m.d. H:i";
$MAXMERET = 500 * 1024;