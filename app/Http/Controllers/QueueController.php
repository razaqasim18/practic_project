<?php

namespace App\Http\Controllers;

class QueueController extends Controller
{
    //steps first make changes in env queue in database
    //make job
    //run artisan command php artisan queue:work
    public function index()
    {
        //  working
        // dispatch(function () {
        //     $data = array('name' => "Qasim Raza");
        //     Mail::send(['text' => 'mail'], $data, function ($message) {
        //         $message->to('admin@admin.com', 'Admin')->subject('test mail');
        //         $message->from('admin@admin.com', 'Admin');
        //     });
        // })->delay(now()->addSecond(1));

        // working
        // dispatch(new SendMailJob)->delay(now()->addSeconds(1));

        //working
        \App\Jobs\SendMailJob::dispatch()->delay(now()->addSeconds(1));
        echo "Basic Email Sent. Check your inbox.";
    }
}
