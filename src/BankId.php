<?php

namespace AnsJabar\LaravelBankId;

use Carbon\Carbon;
use Dimafe6\BankID\Service\BankIDService;
use Dimafe6\BankID\Model\CollectResponse;

class BankId
{
    public function identify(string $person_no)
    {
        $bankIDService = new BankIDService(
            'https://appapi2.test.bankid.com/rp/v5.1/',
            $_SERVER["REMOTE_ADDR"],
            [
                'verify' => false,
                'cert'   => [config('bankid.certificate_path'), config('bankid.certificate_password')]
            ]
        );
        $success = false;
        $wait = abs(config('bankid.wait', 60));
        $response = $bankIDService->getAuthResponse($person_no);
        do 
        {
            $authResponse = $bankIDService->collectResponse($response->orderRef);
            if($authResponse->status == CollectResponse::STATUS_COMPLETED)
            {
                $success = true;
                break;
            }
            sleep(1);
        } while (Carbon::now()->lt( Carbon::now()->addSeconds( $wait > 60 ? 60 : $wait ) ));
        return $success;
    }
}
