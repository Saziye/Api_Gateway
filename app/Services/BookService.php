<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class BookService
{
    use ConsumesExternalService;

    /**
     * The base uri to consume the books service
     * @var string
     */
    public $baseUri;

    public function __construct()
    {
        $this -> baseUri = config('services.books.base_uri');
    }

    /**
     * Obtain the full list of book from book service
     * @var string
     */
    public function obtainBooks()
    {
        return $this->performRequest('GET', '/books');
    }

     /**
     * Create one book using the book service
     * @var string
     */
    public function createBook($data)
    {
        return $this->performRequest('POST', '/books', $data);
    }

    /**
     * Obtain one single book from book service
     * @var string
     */
    public function obtainBook($book)
    {
        return $this->performRequest('GET', "/books/{$book}");
    }

    /**
     * Update an instance of book using book service
     * @var string
     */
    public function editBook($data,$book)
    {
        return $this->performRequest('PUT', "/books/{$book}", $data);
    }

    /**
     * Remove a single book using book service
     * @var string
     */
    public function deleteBook($book)
    {
        return $this->performRequest('DELETE', "/books/{$book}");
    }

}