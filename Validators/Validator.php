<?php

class Validator
{

    protected $message;
    public function __construct($message)
    {
        $this->message = $message;
        return $this;
    }

    public function getMessage()
    {
        return $this->message;
    }


}