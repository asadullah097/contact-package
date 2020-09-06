<?php

namespace Asadlaravel\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;
   public $name;
   public $subject;
   public $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$subject,$message)
    {
        $this->name=$name;
        $this->subject=$subject;
        $this->message=$message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('contact::contact.email')->with(['message'=>$this->message,'name'=>$this->name,'subject'=>$this->subject]);
    }
}
