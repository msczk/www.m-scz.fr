<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\contactMessageAdmin;
use App\Notifications\newsletterAdmin;
use App\Notifications\newsletterUser;
use App\Models\User;
use App\Models\NewsletterSubscriber;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\NewsletterRequest;

class ContactController extends Controller
{
	public function sendMessage(ContactRequest $request)
	{
		$email = $request->input('email');
		$name = $request->input('name');
		$subject = $request->input('subject');
		$message = $request->input('message');

		$admin = new User;
		$admin->email = env('ADMIN_EMAIL');
		
		$admin->notify(new contactMessageAdmin($email, $name, $subject, $message));
		
		return redirect(route('home').'#contact')->with('success-contact', __('Votre message a bien été envoyé !'));
	}

	public function subscribeNewsletter(NewsletterRequest $request)
	{
		$email_newsletter = $request->input('email-newsletter');

		$subscriber = new NewsletterSubscriber;
		$subscriber->email = $email_newsletter;
		$subscriber->save();

		$user = new User;
		$user->email = $email_newsletter;

		$user->notify(new newsletterUser());

		$admin = new User;
		$admin->email = env('ADMIN_EMAIL');
		
		$admin->notify(new newsletterAdmin($user->email));

		return redirect(route('home').'#newsletter')->with('success-newsletter', __('Vous êtes désormais abonné à ma newsletter !'));	
	}
}
