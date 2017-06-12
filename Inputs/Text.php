<?php

include 'BaseInput.php';
include_once('./Libs/ValidatorsFactory.php');

class Text extends BaseInput
{
	private $name, $attrs;
	public $rules, $error;

    protected $validators;

    protected $value;
    protected $messages;
	
	function __construct($name, $attrs)
	{
		$this->name = $name;
		$this->attrs = $attrs;

	}

	public function getMessages()
    {
        return $this->messages;
    }
	public function setValue($value)
    {
        $this->value = $value;
    }

	function render()
	{
		$name = $this->name;
		$html = sprintf("<input type='text' name='%s' ", $name);
		$attrs = $this->attrs;


			foreach($attrs as $k => $v)
			{
			   if(is_numeric($k))
				{
					$html.= sprintf(" %s ", $v);
				}
				else
				{
					$html.= sprintf(" %s=%s ", $k, $v);
				}
			}


		$html.= '>';

		return $html;
	}

	public function addValidator(Validator $validator)
    {
        $this->validators[] = $validator;
    }

    public function addValidators()
    {

    }


	function isValid()
	{
	    $this->messages = [];
        foreach ($this->validators as $validator){
            if(!$validator->validate($this->value)){
                $this->messages[] = $validator->getMessage();
            }else{
                //
            }
        }

        return (empty($this->messages));
	}
}