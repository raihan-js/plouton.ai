<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the request data as needed
        $data = $request->validate([
            'email'         => 'required|email',
            'subject'       => 'required|string',
            'meeting_date'  => 'required|date',
            'meeting_time'  => 'required',
            'budget'        => 'required|numeric',
            'message'       => 'nullable|string',
        ]);

        // Prepare email content (adjust as needed)
        $content = "Email: {$data['email']}\n"
                 . "Subject: {$data['subject']}\n"
                 . "Meeting Date: {$data['meeting_date']}\n"
                 . "Meeting Time: {$data['meeting_time']}\n"
                 . "Budget: \${$data['budget']}\n\n"
                 . "Message:\n{$data['message']}";

        // Send the email using Laravel's Mail facade
        Mail::raw($content, function ($message) use ($data) {
            $message->to('araihansikder@gmail.com')  // replace with your email
                    ->subject('New Contact Form Submission: ' . $data['subject']);
        });

        // Redirect back with a success message (or return JSON if using AJAX)
        return back()->with('success', 'Thank you! Your message has been sent.');
    }
}
