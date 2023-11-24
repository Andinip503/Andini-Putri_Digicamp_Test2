<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include APPPATH.'third_party/Classes/PHPExcel.php';

/**
 * 
 */
class Excel extends PHPExcel {
	
	function __construct() {
		parent::__construct();
	}
}

?>