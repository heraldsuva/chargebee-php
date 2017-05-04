<?php

class ChargeBee_PaymentSource extends ChargeBee_Model
{

  protected $allowed = array('id', 'customerId', 'type', 'referenceId', 'status', 'gateway', 'gatewayAccountId',
'ipAddress', 'card', 'bankAccount', 'amazonPayment', 'paypal');



  # OPERATIONS
  #-----------

  public static function createUsingTempToken($params, $env = null, $headers = array())
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("payment_sources","create_using_temp_token"), $params, $env, $headers);
  }

  public static function createUsingPermanentToken($params, $env = null, $headers = array())
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("payment_sources","create_using_permanent_token"), $params, $env, $headers);
  }

  public static function createCard($params, $env = null, $headers = array())
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("payment_sources","create_card"), $params, $env, $headers);
  }

  public static function retrieve($id, $env = null, $headers = array())
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, ChargeBee_Util::encodeURIPath("payment_sources",$id), array(), $env, $headers);
  }

  public static function all($params = array(), $env = null, $headers = array())
  {
    return ChargeBee_Request::sendListRequest(ChargeBee_Request::GET, ChargeBee_Util::encodeURIPath("payment_sources"), $params, $env, $headers);
  }

  public static function switchGatewayAccount($id, $params, $env = null, $headers = array())
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("payment_sources",$id,"switch_gateway_account"), $params, $env, $headers);
  }

  public static function exportPaymentSource($id, $params, $env = null, $headers = array())
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("payment_sources",$id,"export_payment_source"), $params, $env, $headers);
  }

  public static function delete($id, $env = null, $headers = array())
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("payment_sources",$id,"delete"), array(), $env, $headers);
  }

 }

?>