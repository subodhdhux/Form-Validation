<?php

//todo autoloader
//spl_autoload_register


include_once('Inputs/Text.php');

include_once('Validators/EmptyValidator.php');
include_once('Validators/EmailValidator.php');
include_once('Validators/RegexValidator.php');

echo '<pre>';

$text = new Text('name', [	'class' => "name red",
                            'id' => 'name',
                            'data-test' => 'testing'
                        ]
				);

$text1 = new Text('name1', [	'class' => "name red",
		'id' => 'name',
		'data-test' => 'testing'
	]
);

$text->addValidator(new EmptyValidator('The field is mandatory'));
$text->addValidator(new EmailValidator('The email is not good!'));

$text1->addValidator(new EmptyValidator('The field is mandatory1'));
/*//
$regexValidator = new RegexValidator('The input only accepts letter without space, . //!');
$regexValidator->setExpression('/^[a-zA-Z\d]+$/');

$text->addValidator($regexValidator);
*/
//test
$text->setValue('');

if($text->isValid()){
	var_dump('all seems okay for this input');
}else{
	var_dump($text->getMessages());
}


$text1->setValue('');

if($text1->isValid()){
	var_dump('all seems okay for this input');
}else{
	var_dump($text1->getMessages());
}