<?php

namespace App\Http\Controllers;


class BookListController extends Controller {

    function home()
    {
        return view("home");
    }

    function aboutBook($bookId)
    {
        return view("bookInfo");
    }

}

?>