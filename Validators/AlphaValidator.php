<?php
include_once('Validator.php');

class AlphaValidator extends Validator
{

    /**
     * @param $value
     * @return mixed
     * validate only a-zA-Z
     */
    public function validate($value)
    {

        //todo
        return filter_var($value, FILTER_VALIDATE_EMAIL);
	}


}