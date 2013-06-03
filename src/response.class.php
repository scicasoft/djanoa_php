<?php
/**
 * Reponse lors de l'envoi d'un SMS
 *
 * @package djanoa
 * @author scicasoft
 * @version 1.0.0
 */
class DjanoaResponse
{
  protected $sent, $error;

  function __construct($response = "")
  {
    $doc = new DOMDocument;
    $doc->loadXML($response);

    if ($doc->getElementsByTagName('DjanoaResponse')->length == 1)
    {
      $this->sent = true;
    } else {
      $code        = $doc->getElementsByTagName('Code')->item(0)->nodeValue;
      $message     = $doc->getElementsByTagName('Error')->item(0)->nodeValue;;
      $ip          = $doc->getElementsByTagName('IP')->item(0)->nodeValue;
      $this->sent  = false;

      $this->error = new DjanoaError($code, $message, $ip);
    }

    return $this;
  }

  /**
   * Vérifie si le SMS est envoyé
   *
   * @return boolean
   */
  public function sent()
  {
    return $this->sent;
  }

  /**
   * recupération de l'erreur
   *
   * @return DjanoaError
   */
  public function getError()
  {
    return $this->error;
  }
}