<?php

namespace App\Http\Controllers;

use App\Mail\Quiz;
use App\Mail\Feedback;
use App\Mail\ChemicalAnilisys;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function quizSend(Request $request)
    {
        echo json_encode([
            'msg' => $this->send($request, new Quiz($request->all())),
        ]);
        exit;
    }

    public function feedbackFormSend(Request $request)
    {
        echo json_encode([
            'msg' => $this->send($request, new Feedback($request->all())),
        ]);
        exit;
    }

    public function chemicalFormSend(Request $request)
    {

        echo json_encode([
            'msg' => $this->send($request, new ChemicalAnilisys($request->all())),
        ]);
        exit;
    }

    public function send(Request $request, $mailable)
    {
//        $mail = Mail::to(env('MAIL_USERNAME'));
        $mail = Mail::to('baglansariev@mail.ru');
        $mail->send($mailable);
        return 'Ваша заявка успешно отправлена!';
    }
}
