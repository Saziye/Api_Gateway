<?php

use GuzzleHttp\Client;

trait ComsumesExternalService 
{
    /**
     * Send a request to any service
     * @return string
     */
    public function performRequest($method, $requestUrl, $formParams = [], $headers = []) 
    {
        $client = new Client([
            'base_uri' => $this->baseUri,
        ]);

        $response = $client ->request($method, $requestUrl, ['form_params' => $formParams, 'header' => $headers]);

        return $response -> getBody() -> getContents();
    }
}