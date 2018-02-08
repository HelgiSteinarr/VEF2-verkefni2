<?php

namespace App;

class BookList {

	static private $books = [
		"bok1" => [
			"name" => "STÆ303",
			"publisher" => "Tölvunot ehf",
			"releaseYear" => "2011"
		],
		"bok2" => [
			"name" => "Petsamo",
			"publisher" => "VAKA-HELGAFELL",
			"releaseYear" => "2016"
		],
		"bok3" => [
			"name" => "Íslensk málsaga",
			"publisher" => "Iðunn",
			"releaseYear" => "1991"
		]
	];

    static function bookInfo($id)
    {
		if (array_key_exists($id, BookList::$books))
		{
			 return [ "name" => BookList::$books[$id]["name"], "publisher" => BookList::$books[$id]["publisher"], "releaseYear" => BookList::$books[$id]["releaseYear"], "error_msg" => "" ];
		}
        return [ "name" => "", "description" => "", "error_msg" => "Invalid book id" ];
    }

	static function bookInfoOfAll()
	{
		return BookList::$books;
	}

}

?>