<?php
namespace app\ index\ controller;

use think\ Controller;

class Index extends Controller {

	public

	function index() {
		$this->assign( 'tb', 'TianBing' );
		return $this->fetch();
	}
}