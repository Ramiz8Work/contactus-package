<?php

namespace Ramiz\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $message;
    public $name;
    /**
     * Create a new message instance.
     */
    public function __construct($message,$name)
    {
        $this->name = $name;
        $this->message = $message;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Mailable',
        );
    }

    /**
     * Get the message content definition.
     */
  

    public function build()
        {
            return $this->markdown('contact::contact.email'); // Adjust the path as needed
        }


    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
