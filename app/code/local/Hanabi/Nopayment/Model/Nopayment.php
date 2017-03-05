<?php
class Hanabi_Nopayment_Model_Nopayment extends Mage_Payment_Model_Method_Abstract {
  protected $_code  = 'hanabi_nopayment';
  protected $_canCapture = true;
  protected $_canUseInternal = true;
  protected $_canUseCheckout = false;
  protected $_canUseForMultishipping = false;
  protected $_formBlockType = 'hanabi_nopayment/form_nopayment';
  protected $_infoBlockType = 'hanabi_nopayment/info_nopayment';

  public function assignData($data)
  {
    $info = $this->getInfoInstance();

    if ($data->getPaymentDescription())
    {
      $info->setPaymentDescription($data->getPaymentDescription());
    }

    return $this;
  }

  public function validate()
  {
    parent::validate();
    $info = $this->getInfoInstance();

    if (!$info->getPaymentDescription())
    {
      $errorCode = 'invalid_data';
      $errorMsg = $this->_getHelper()->__("Payment Description is required.\n");
    }

    if ($errorMsg)
    {
      Mage::throwException($errorMsg);
    }

    return $this;
  }

}
