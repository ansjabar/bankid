<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Path for the BankID certificate file
    |--------------------------------------------------------------------------
    */
    'certificate_path' => env('BANKID_CERTIFICATE_PATH'),
    /*
    |--------------------------------------------------------------------------
    | Password for the BankID certificate file
    |--------------------------------------------------------------------------
    */
    'certificate_password' => env('BANKID_CERTIFICATE_PASSWORD'),
    /*
    |--------------------------------------------------------------------------
    | Response waiting time, wait for the identification from BankID App
    | Maximum wait time can be 60 Seconds
    |--------------------------------------------------------------------------
    */
    'response_wait' => env('BANKID_RESPONSE_WAIT'),

];