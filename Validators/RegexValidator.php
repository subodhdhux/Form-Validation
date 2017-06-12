<?php
include_once('Validator.php');

class RegexValidator extends Validator
{

    protected $expression = '/^[a-zA-Z\d]+$/';

    /**
     * @param $value
     * @return mixed
     * validate only a-zA-Z
     */
    public function validate($value)
    {

        //todo
        return (preg_match($this->expression, $value));
	}

	public function setExpression($expression)
    {
        $this->expression = $expression;
    }


}