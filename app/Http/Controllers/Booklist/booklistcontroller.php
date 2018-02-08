<?php

namespace App\Http\Controllers;

use App\BookList;


class BookListController extends Controller {

    function home()
    {
		$books = BookList::bookInfoOfAll();
        return view("home", [ "books" => $books ]);
    }

    function aboutBook($bookId)
    {
		$bookInfo = BookList::bookInfo($bookId);
        return view("bookInfo", [ "bookInfo" => $bookInfo ]);
    }

}

?>