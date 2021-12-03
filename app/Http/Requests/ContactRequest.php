<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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

    /**
     * 
     *
     * 
    */
     
    public function rules()
    {
        return [
            'petsname' => 'required',
            'fio' => 'required',
            'number' => 'required',
            'email' => 'required|email',
            'aim' => 'required',
            'place' => 'required',
            'charge' => 'required|min:5|max:50',
        ];
    }

    public function messages() {
        return [
            'petsname.required' => 'Поле кличка является обязательным',
            'fio.required' => 'Поле ФИО является обязательным',
            'number.required' => 'Поле номер телефона является обязательным',
            'email.required' => 'Поле email является обязательным',
            'aim.required' => 'Поле цель является обязательным',
            'place.required' => 'Поле место является обязательным',
            'charge.required' => 'Поле ответсвенность является обязательным',
        ];
    }


}
