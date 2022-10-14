<?php 

class Controller {
  public function index($view, $data = [])
  {
    require_once'../app/views/' . $view . '.php';
  }  
}