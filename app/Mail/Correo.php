<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Correo extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    
    private $mailSubject;
    private $mailFrom;
    public function __construct($subject, $from)
    {

        $this -> mailSubject = $subject;
        $this -> mailFrom = $from;

    }


    public function build()
    {
        return $this->
            from($this -> mailFrom,$this -> mailSubject)->
            view('mail',[ "coso" => $this -> mailSubject]);
    }
}
