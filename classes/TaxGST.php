<?php

namespace modules\tax_gst\classes;

use ErrorException;
use core\classes\Config;
use core\classes\Database;
use core\classes\Request;
use core\classes\URL;
use core\classes\Model;
use core\classes\Logger;
use core\classes\models\Customer;

class TaxGST {
	protected $database;
	protected $config;
	protected $logger;

	public function __construct(Config $config, Database $database) {
		$this->config = $config;
		$this->database = $database;
		$this->logger = Logger::getLogger(get_class($this));
	}

	public function calculateTax($value) {
		$tax_rate = $this->config->moduleConfig('\modules\tax_gst')->tax_rate;
		return money_format('%^!n', ($value * $tax_rate));
	}
}

?>
