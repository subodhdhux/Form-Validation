<?php
include_once('Validator.php');

class EmptyValidator extends Validator
{
    public function validate($value)
	{
        return !empty($value);
	}

}