<?php
 
namespace Radarsofthouse\Reepay\Model;

/**
 * Class Reepayapplepay
 *
 * @package Radarsofthouse\Reepay\Model
 */
class Reepayapplepay extends \Radarsofthouse\Reepay\Model\Reepaypayment
{
    protected $_code = 'reepay_applepay';

    public function isAvailable(\Magento\Quote\Api\Data\CartInterface $quote = null){
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        if(stripos( $user_agent, 'Edg') !== false){
            return false;
        }else if(stripos( $user_agent, 'Chrome') !== false){
            return false;
        }else if(stripos( $user_agent, 'Safari') !== false){
            return parent::isAvailable($quote);   
        }else{
            return false;
        }
    }
}
