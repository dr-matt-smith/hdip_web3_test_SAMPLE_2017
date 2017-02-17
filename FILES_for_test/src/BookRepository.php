<?php
/**
 * Created by PhpStorm.
 * User: matt
 * Date: 03/12/15
 * Time: 15:39
 */

namespace Itb;

/**
 * Class BookRepository
 * class to store and serve Book objects (bit like a memory-only database ...)
 * @package Hdip\Model
 */
class BookRepository
{
    /**
     * an associative array, containing Book objects
     * and indexed by the unique, primary key field 'isbn'
     * @var array
     */
    private $books;

    /**
     * create a new BookRepository object
     * and intialise it with 3 books as defined below
     */
    function __construct()
    {
        $b1 = new Book();
        $b1->setId(1239);
        $b1->setTitle('brown');
        $b1->setImage('father_brown.jpg');
        $b1->setNumPagesTotal(320);
        $this->create($b1);

        $b2 = new Book();
        $b2->setId(8761);
        $b2->setTitle('marple');
        $b2->setImage('miss_marple.jpg');
        $b2->setNumPagesTotal(201);
        $this->create($b2);

        $b3 = new Book();
        $b3->setId(3003);
        $b3->setTitle('holmes');
        $b3->setImage('sherlock_holmes.jpg');
        $b3->setNumPagesTotal(432);
        $this->create($b3);
    }

    /**
     * add the given book to the repository
     *
     * @param Book $book
     */
    public function create(Book $book)
    {
        // get ID from book object
        $id = $book->getId();

        // add book object to array, with index of the ID
        $this->books[$id] = $book;

    }

    /**
     * return an array containing all books
     * @return array
     */
    public function getAll()
    {
        return $this->books;
    }

    /**
     * attempt to retrieve and return book for given id = $id
     * @param int $id
     * @return Book (if found)
     * @return null (if not found)
     */
    public function getOneById($id)
    {
        if(array_key_exists($id, $this->books)){
            return $this->books[$id];
        } else {
            return null;
        }
    }

}