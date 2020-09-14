<?php
echo "TP fichier de LOG";
require_once("log1.class.php");
require_once("log2.class.php");
$connectionUtilisateur = " -> Un utilisateur s'est connecté.";
$lienUtilisateur = " -> Un utilisateur à cliquer sur un lien.";
$deconnectionUtilisateur = " -> Un utilisateur s'est déconnecté.";
$log1 = new Log1();
$log2 = new Log2();
$log1->StartLog();
$log1->AddLog($connectionUtilisateur);
$log1->AddLog($lienUtilisateur);
$log1->AddLog($deconnectionUtilisateur);
$log1->EndLog();
$log2->StartLog();
$log2->AddLog($connectionUtilisateur);
$log2->AddLog($lienUtilisateur);
$log2->AddLog($deconnectionUtilisateur);
$log2->EndLog();
 ?>
