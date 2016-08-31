<?php 

namespace App\Repositories;

use App\User;
use App\Book;


class BookRepository
{
	public function forBook(Book $book)
	{
		return $book->Book()
					->orderBy('created_by', 'asc');
					->get();
	}
}