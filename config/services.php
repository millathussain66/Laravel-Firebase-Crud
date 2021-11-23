<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    // This is going to Firebase Application Configeration
    'firebase' => [

        'apiKey' => env('FIREBASE_API_KEY'),
        'authDomain' => env('FIREBASE_AUTH_DOMAIN'),
        'projectId' => env('FIREBASE_PROJECT_ID'),
        'storageBucket' => env('FIREBASE_STOREAGE_BUCKET'),
        'messagingSenderId' => env('FIREBASE_MESSAGING_SENDER_ID'),
        'appId' => env('FIREBASE_APP_ID'),
        'measurementId' => env('FIREBASE_MEASUREMENT_ID'),



    ]

    // const firebaseConfig = {
    //     apiKey: "AIzaSyBmw0YKiOMhR-lZMX8T_Pr4pfyR0y-Y-ls",
    //     authDomain: "laravel-firebase-crud-f24b6.firebaseapp.com",
    //     projectId: "laravel-firebase-crud-f24b6",
    //     storageBucket: "laravel-firebase-crud-f24b6.appspot.com",
    //     messagingSenderId: "762663506378",
    //     appId: "1:762663506378:web:5e11bc28197641df187f33",
    //     measurementId: "G-5T8C55BXM1"
    //   };

];
