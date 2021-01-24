<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\contactMessageAdmin;
use App\Models\User;
use App\Http\Requests\ContactRequest;

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
		
		return redirect(route('home').'#contact')->with('success', __('Votre message a bien été envoyé !'));
	}
}
