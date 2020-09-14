<?php
class Log2 extends log1
{
  public function StartLog()
  {
    $time = date("H:i:s");
    $fichierlog = fopen('log.txt', 'a');

    fputs($fichierlog, $this->separation."\r\n".$time." : ".'Début des logs pour la deuxiéme class...'."\r\n".$this->separation."\r\n");

    fclose($fichierlog);
  }

  public function EndLog()
  {
    $time = date("H:i:s");
    $fichierlog = fopen('log.txt', 'a');

    fputs($fichierlog, $this->separation."\r\n".$time." : ".'Fin des logs pour la deuxiéme class...'."\r\n".$this->separation."\r\n");

    fclose($fichierlog);
  }
}
 ?>
