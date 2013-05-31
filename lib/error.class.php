<?php
/**
 * Les erreurs Djanoa
 * 
 * @package djanoa
 * @author scicasoft
 * @version 1.0.0
 */
class DjanoaError
{
  protected $code, $message, $ip;
  
  /**
   * Instantiates a new djanoa error object
   * 
   * @param string $code 
   * @param string $message 
   * @param string $ip 
   * @return DjanoError
   */
  function __construct($code, $message, $ip)
  {
    $this->code    = $code;
    $this->message = $message;
    $this->ip      = $ip;

    return $self;
  }

  /**
   * recupération du code d'erreur
   * 
   * @return string
   */
  public function getCode() {
    return $this->code;
  }

  /**
   * recupération du message d'erreur
   * 
   * @return string
   */
  public function getMessage() {
    return $this->message;
  }

  /**
   * recupération de l'adresse ip du client
   * 
   * @return string
   */
  public function getIp() {
    return $this->ip;
  }


}