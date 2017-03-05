<?php
class Hanabi_Nopayment_Block_Form_Nopayment extends Mage_Payment_Block_Form
{
  protected function _construct()
  {
    parent::_construct();
    $this->setTemplate('hanabi/nopayment/form/nopayment.phtml');
  }
}
