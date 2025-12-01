<?php
//konfig betoltese
require_once __DIR__ . '/kozos/config.inc.php';
session_start();
//oldal beolvasása
$keres = $_GET['oldal'] ?? '/';
//ha létezik az oldal azt töltjük be
$oldal = $oldalak[$keres] ?? $hiba_oldal;
//ha van hozzatartaozo logika uttassa le
$logika = __DIR__ . '/logika/' . $oldal['fajl'] . '.php';
if (file_exists($logika)) {
    include $logika;
}
//sablon
include __DIR__ . '/sablonok/index.tpl.php';
