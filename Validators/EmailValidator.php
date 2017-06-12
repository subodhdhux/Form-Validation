<?php
include_once('Validator.php');

class EmailValidator extends Validator
{

    public function validate($value)
    {

        return filter_var($value, FILTER_VALIDATE_EMAIL);
	}


}