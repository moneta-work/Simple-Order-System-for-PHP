<?php
require('../private/config.php');
require('../private/restricted.php');
require('../class/Orders.php');


if(!isset($_GET['p']) && !isset($_GET['c'])){
	header('Location: unpaid_proformas.php');
}

$proforma_id = (int)$_GET['p'];
$customer_id = (int)$_GET['c'];

$admin = new CyanideSystems\Orders($customer_id);

if($admin->createInvoice($proforma_id)){
	echo 'Invoice created';
} else {
	echo 'Invoice not created';
}