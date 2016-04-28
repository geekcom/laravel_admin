<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    /**
     * Override Method of trait ResetsPasswords
     *
     */
    public function sendResetLinkEmail(Request $request)
    {
    	$this->validate($request, ['email' => 'required|email']);
    
    	$broker = $this->getBroker();
    
    	$response = Password::broker($broker)->sendResetLink(
    			$request->only('email'), $this->resetEmailBuilder()
    			);
    
    	switch ($response) {
    		case Password::RESET_LINK_SENT:
    			flash()->success('An email was sent to you...');
    			return $this->getSendResetLinkEmailSuccessResponse($response);
    		case Password::INVALID_USER:
    		default:
    			return $this->getSendResetLinkEmailFailureResponse($response);
    	}
    }
}
