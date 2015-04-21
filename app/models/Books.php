<?php

class Books extends \Phalcon\Mvc\Model
{
    public function addBook(array $book)
    {
        $this->create($book);
    }

    public function getBooks()
    {
        return $this->find();
    }

    public function updateBook($book)
    {
        //
    }

    public function deleteBook($book_id)
    {
        //
    }
} 