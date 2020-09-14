<?php
class Log1
{
  public $separation = "---------------------------------------------------------";


  function __construct()
  {
    //Initier dés la CONSTRUCTION de la class

  }

  function __destruct()
  {
    //Initier dés la DESTRUCTION de la class
  }
  public function SuppLog()
  {
    $fichierlog = fopen('log.txt', 'w');
    fclose($fichierlog);
  }
  public function AddLog($log)
  {
    $time = date("H:i:s");
    $fichierlog = fopen('log.txt', 'a');

    fputs($fichierlog, $time." : ".$log."\r\n");

    fclose($fichierlog);
  }
  public function StartLog()
  {
    $time = date("H:i:s");
    $fichierlog = fopen('log.txt', 'a');

    fputs($fichierlog, $this->separation."\r\n".$time." : ".'Début des logs pour la premiére class...'."\r\n".$this->separation."\r\n");

    fclose($fichierlog);
  }

  public function EndLog()
  {
    $time = date("H:i:s");
    $fichierlog = fopen('log.txt', 'a');

    fputs($fichierlog, $this->separation."\r\n".$time." : ".'Fin des logs pour la premiére class...'."\r\n".$this->separation."\r\n");

    fclose($fichierlog);
  }
}
 ?>
