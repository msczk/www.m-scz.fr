<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsletterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email-newsletter' => 'required|email|unique:App\Models\NewsletterSubscriber,email'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email-newsletter.required' => 'Vous devez saisir une adresse email',
            'email-newsletter.unique' => 'Cette adresse email est déjà inscrite à ma newsletter',
        ];
    }

    protected function getRedirectUrl()
    {
        return route('home').'#newsletter';
    }
}
