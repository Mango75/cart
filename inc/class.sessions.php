<?php

class Session{
 private $sessionId;
 private $variables;

 public function stop_session(){

 	session_unset();
 	session_destroy();
 }
 public function set_variables($varia){
 	$this->variables=$varia;


 }
public function get_variables(){
	return $this->variables;
}

}

?>