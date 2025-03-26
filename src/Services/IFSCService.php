<?php

namespace Abinash\IFSCValidator\Services;

use Illuminate\Support\Facades\Http;

class IFSCService
{
    private $apiUrl = "https://ifsc.razorpay.com/";

    public function getBankDetails($ifsc)
    {
        $response = Http::get($this->apiUrl . $ifsc);

        if ($response->successful()) {
            return $response->json();
        }

        return ['error' => 'Invalid IFSC code'];
    }
}
