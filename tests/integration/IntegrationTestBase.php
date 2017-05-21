<?php

namespace Platron\PhpSdk\tests\integration;

use Platron\PhpSdk\tests\integration\MerchantSettings;

abstract class IntegrationTestBase extends \PHPUnit_Framework_TestCase {
	/** @var int */
	protected $merchantId;
	/** @var string */
	protected $secretKey;
	
	public function setUp()
    {
		$this->merchantId = MerchantSettings::MERCHANT_ID;
		$this->secretKey = MerchantSettings::SECRET_KEY;
	}
}
