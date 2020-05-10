<?php

namespace App\Services;

use App\Traits\ComsumesExternalService;

class BookService
{
    use ComsumesExternalService;

    /**
     * The base uri to consume the books service
     * @var string
     */
    public $baseUri;

    public function __construct()
    {
        $this -> baseUri = config('services.books.base_uri');
    }

}