<?php

namespace App\Controller;

use App\Core\Controller;
use App\Repository\UserRepository;

class HomeController extends Controller
{
    public function index(): void
    {
        $userRepository = new UserRepository();
        $users = $userRepository->findAll();

        $this->render('home', [
            'title' => 'HOME PAGE',
            'description' => 'Classical home page',
            'age' => 54,
            'users' => $users
        ]);
    }
}
