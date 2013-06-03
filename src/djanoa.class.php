<?php
include 'error.class.php';
include 'response.class.php';
include 'received_message.class.php';

/**
* Client PHP de Djanoa (http://www.djanoa.com)
*
* @package djanoa
* @author scicasoft
* @version 1.0.0
*/
class Djanoa
{
  protected $from, $account_code, $application_pass, $response;

  /**
   *
   * @param string $from
   * @param string $account_code
   * @param string $application_pass
   * @return Djanoa
   */
  function __construct($from, $account_code, $application_pass)
  {
    $this->from             = $from;
    $this->account_code     = $account_code;
    $this->application_pass = $application_pass;

    return $this;
  }

  /**
   * Send a new sms
   * @param string $phone
   * @param string $message
   * @return DjanoaResponse
   */
  public function send_sms($phone, $message)
  {
    $message        = urlencode($message);
    $req            = $this->sender_base_url() . "/?from=" . $this->from . "&to=" . $phone . "&text=" . $message . "&pass=" . $this->application_pass;
    $res            = file_get_contents($req);
    $this->response = new DjanoaResponse($res);

    return $this->response;
  }

  /**
   * URL de base pour l'envoi du SMS
   * @return string
   */
  protected function sender_base_url()
  {
    return "http://djanoa.com/sms/" . $this->account_code . "/out";
  }

  /**
   * récupération de la réponse
   *
   * @return DjanoaResponse
   */
  public function getResponse() {
    return $this->response;
  }
}