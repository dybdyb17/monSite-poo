<?php

namespace App\Controller;

use App\Core\Controller;

class HomeController extends Controller
{
    public function index() {
        $this->render('home', [
            'title' => 'HOME PAGE',
            'description' => 'Classical home page',
            'age' => 54
        ]);
    }

    public function contact(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->render('contact', [
                'title' => 'CONTACT PAGE',
                'email' => $_POST['email'],
                'subject' => $_POST['subject'],
                'message' => $_POST['message']
            ]);
            return;
        }

        $this->render('contact', [
            'title' => 'CONTACT PAGE'
        ]);
    }
}
