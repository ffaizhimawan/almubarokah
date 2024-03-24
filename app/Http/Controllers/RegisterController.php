<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\MailSend;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    
    public function actionregister(Request $request)
    {
        $str = Str::random(100);

        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'verify_key' => $str
        ]);

        $details = [
            'email' => $request->email,
            'website' => 'Company Profile Kelompok 6',
            'datetime' => Carbon::now()->format('Y-m-d H:i:s'),
            'url' => url('/register/verify/'.$str)
        ];

        
        Session::flash('message', 'Link verifikasi telah dikirim ke Email Anda. Silakan cek Email Anda untuk Mengaktifkan Akun');
        return redirect('register');
    }
    
    public function verify($verify_key)
    {
        $user = User::where('verify_key', $verify_key)->first();

        if ($user) {
            $user->update(['active' => 1]); // Menggunakan update() langsung pada model User
            return "Verifikasi Berhasil. Akun Anda sudah aktif.";
        } else {
            return "Key tidak valid!";
        }
    }
}
