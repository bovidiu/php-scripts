<?php

/**
 * @file
 * Form maker
 * 
 * @copyright   Copyright (C) 2014 OSb Web Solutions
 * @author      Ovidiu S Bokar <contact@osbwebsolutions.com>
 * @date		22/03/2014
 *
 */

class FormMaker
{
	
	static public $_instance;
	
	static public function getInstance() {
			if (is_null(self::$_instance)) {
				self::$_instance=new FormMaker();
			}
			return self::$_instance;
	}

	public function form_open($options,$encription=null){
		return '<form  '.$encription.' '.self::makeString($options).' >';
;	}

	public function form_label($name,$options = null){
		$opt = '';
		if(!is_null($options)){
			$opt = self::makeString($options);
		}
		return '<label '.$opt.' >'.$name.'</label>';
	}

	public function form_input($options){
		$opt = self::makeString($options);
		return '<input '.$opt.'>';
	}

	public function form_textarea($options){
		$opt = self::makeString($options);
		return '<texarea '.$opt.'"></textarea>';
	}

	public function form_button($name,$options){
		$opt = self::makeString($options);
		return '<button '.$opt.'" >'.$name.'</button>';
	}

	public function form_close(){
		return '</form>';
	}

	public function makeString($argArray){
		if(!is_array($argArray)){
			return 'Values needs to be in an array($key = $value) ';exit;
		}
		$opt = array();
		foreach ($argArray as $key => $value) {
			$opt[] = $key.'="'.$value.'" '; 
		}

		return implode("",$opt); 

	}

}
