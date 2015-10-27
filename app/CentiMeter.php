<?php

namespace ConverterApp;

class CentiMeter extends Length
{
  protected $_power;
  public function __construct()
  {
    $this->power = -2;
    parent::__construct("CentiMeter","CM");
  }
}
