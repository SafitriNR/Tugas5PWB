<?php 
class Controller //sebagai class Contoller utama
{
  public function view($view, $data = [])
  {
    require_once '../app/views' . $view . '.php';
  }
}
