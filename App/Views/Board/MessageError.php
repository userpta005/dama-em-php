<?php

/**
 *
 * @author Rafael Arend
 *
 **/

class MessageError
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function make()
    {
        $message_error = $this->data->getValue('message-error');

        if($message_error)
        {
            $message_error = "<div class='message-error'>{$message_error}</div>";
            $this->data->setValue('message-error',$message_error);
        }
    }
}


