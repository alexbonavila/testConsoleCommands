<?php

namespace App\Http\Controllers;

use App\Services\SendWelcomeEmail;
use Illuminate\Http\Request;

class SendWelcomeEmailController extends Controller
{
    protected $email;

    /**
     * SendWelcomeEmailController constructor.
     * @param $email
     */
    public function __construct(SendWelcomeEmail $email)
    {
        $this->email = $email;
    }


    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $this->email->send();
    }

}
