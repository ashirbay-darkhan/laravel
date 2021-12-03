<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Form;

// ContactRequest - проверяет форму на заполненость
// submit - выполняется при нажатии отправить в Анкете
// Отправляет данные в БД 

class FormController extends Controller
{
    public function submit(ContactRequest $req) {
        $form = new Form();
        $form->petsname = $req->input('petsname');
        $form->fio = $req->input('fio');
        $form->number = $req->input('number');
        $form->email = $req->input('email');
        $form->aim = $req->input('aim');
        $form->place = $req->input('place');
        $form->charge = $req->input('charge');
        
        $form->save();

        return redirect()->route('home')->with('success', 'Заявка была добавлена');
        
        
    }
}
