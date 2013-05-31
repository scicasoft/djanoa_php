<?php
/**
 * Traitement des SMS recus
 *
 * @package djanoa
 * @author scicasoft
 * @version 1.0.0
 */
class DjanoaReceivedMessage
{
  protected $from, $to, $message;

  /**
   * Instantiates a new response object
   *
   * @param string $from le numéro d'envoi du SMS
   * @param string $to numero de destinataire du SMS
   * @param string $message contenu du SMS
   * @return DjanoaReceivedMessage
   */
  function __construct($from, $to, $message)
  {
    $this->from    = $from;
    $this->to      = $to;
    $this->message = $message;
  }

  /**
   * Return the words off the sms
   *
   * @return array
   */
  public function words()
  {
    return explode(" ", $this->message);
  }

  /**
   * recupération du numéro d'envoi
   *
   * @return string
   */
  public function getFrom() {
    return $this->from;
  }


  /**
   * recupération du numéro de destinataire
   *
   * @return string
   */
  public function getTo() {
    return $this->to;
  }

  /**
   * recupération du contenu du message
   *
   * @return string
   */
  public function getMessage() {
    return $this->message;
  }

}