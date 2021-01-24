<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class contactMessageAdmin extends Notification
{
    use Queueable;

    public $email;

    public $name;

    public $subject;

    public $message;


    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(string $email, string $name, string $subject, $message)
    {
        $this->email = $email;

        $this->name = $name;

        $this->subject = $subject;

        $this->message = $message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Nouveau message depuis le formulaire de contact')
                    ->greeting('Bonjour !')
                    ->line('Vous venez de recevoir une message depuis le formulaire de contact :')
                    ->line('Expédié par : '.$this->name.' ('.$this->email.')')
                    ->line('Sujet : '.$this->subject)
                    ->line($this->message)
                    ->salutation('Message envoyé automatiquement depuis le site.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
