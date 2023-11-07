<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Correo;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function Enviar(Request $request){
        $correo = new Correo(
            $request -> post("subject"),
            $request->post("from")
        );
        Mail::to("destino@correo.com")->send($correo);
        return "Exito";

    }
}
