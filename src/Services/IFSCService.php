<?php

namespace Abinash\IFSCValidator\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;

class IFSCService
{
    private $apiUrl;

    public function __construct()
    {
        $this->apiUrl = Config::get('ifsc.api_url', 'https://ifsc.razorpay.com/');
    }

    public function getBankDetails($ifsc)
    {
        $response = Http::get($this->apiUrl . $ifsc);

        if ($response->successful()) {
            return $response->json();
        }

        return ['error' => 'Invalid IFSC code'];
    }
}
