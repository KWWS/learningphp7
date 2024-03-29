<?php
	function loginMessage(){
		if(isset($_COOKIE['username'])){
			return "You are " . $_COOKIE['username'];
		}else{
			return "You are not authenticated.";
		}
	}

	function printableTitle(array $book): string {
		$result = '<i>' . $book['title'] . '</i> - ' . $book['author'];
		if(!$book['available']){
			$result .= ' <b>Not available</b>';
		}
		return $result;
	}

	function bookingBook(array &$books, string $title): bool {
		foreach ($books as $key => $book){
			if( $book['title'] == $title){
				$books[$key]['available'] = false;
				return true;
			} else {
				return false;
			}
		}
	}

	function updateBooks(array $books){
		$booksJson = json_encode($books);
		file_put_contents('books.json', $booksJson);
	}
?>