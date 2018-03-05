<?php

/**
 * Copyright 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace AlanKent\CalculatorWebService\Model;

use AlanKent\CalculatorWebService\Api\CalculatorInterface;

/**
 * Defines the implementaiton class of the calculator service contract.
 */
class Calculator implements CalculatorInterface
{
    /**
     * Return the sum of the two numbers.
     *
     * @api
     * @param int $num1 Left hand operand.
     * @param int $num2 Right hand operand.
     * @return int The sum of the two values.
     */
    public function add($num1, $num2) {
		$websiteId='123';
		$storeName='dummy';
		$storeCode='dumcode';
        $group = $this->groupFactory->create();

        if($this->getGroupId())
        {
            $group->load($this->getGroupId());

            if($group->getId() && $group->getWebsiteId())
            {
                $website = $this->websiteFactory->create();
                $website->load($group->getWebsiteId());
               
            }
        }
        $group = $this->groupFactory->create();
        if($groupId)
            $group->load($groupId);

        $group->setWebsiteId($websiteId);
        $group->setName($storeName);
        $group->setCode($storeCode);
        $group->save();


//#addStore
    /** @var $store Mage_Core_Model_Store */
    $store = Mage::getModel('core/store');
    $store->setCode('mysiteStore')
        ->setWebsiteId($storeGroup->getWebsiteId())
        ->setGroupId($storeGroup->getId())
        ->setName('dummyStoreView')
        ->setIsActive(1)
        ->save();
	  	
	  
	  
	    return $num1 + $num2;
    }
	
	
}