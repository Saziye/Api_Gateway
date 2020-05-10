<?php

namespace App\Services;

use App\Traits\ComsumesExternalService;

class AuthorService
{
    use ComsumesExternalService;

    /**
     * The base uri to consume the authors service
     * @var string
     */
    public $baseUri;

    public function __construct()
    {
        $this -> baseUri = config('services.authors.base_uri');
    }

}