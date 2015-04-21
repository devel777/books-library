<?php

use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Form;
use Phalcon\Validation\Validator\PresenceOf;

class AddBookForm extends Form
{
    public function initialize()
    {
        $this->add(new Text("title"));
        $this->add(new Text("author"));
        $this->add(new Text("group"));
    }
} 