<?php
$_MODULE = [
	"name" => "Tax - GST",
	"description" => "Support for GST within the checkout",
	"namespace" => "\\modules\\tax_gst",
	"config_controller" => "administrator\\TaxGST",
	"controllers" => [
		"administrator\\TaxGST"
	],
	"default_config" => [
		"tax_rate" => 0.10
	]
];
