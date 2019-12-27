<?php
	
	use app\{BookProduct, NotebookProduct};
	use wfm\interfaces\IGadget;
	use PHPMailer\PHPMailer\PHPMailer;
	
	error_reporting(-1);

	require_once __DIR__ . '/vendor/autoload.php';
	
	function debug($data)
	{
		echo '<pre>' . print_r($data, 1) . '</pre>';
	}
	
	function offerCase(IGadget $product)
	{
		echo "<p>Case for gadget: {$product->getName()}</p>";
	}
	
	$book = new BookProduct('Три мушкетера', 20, 1000);
	$notebook = new NotebookProduct('Dell', 1000, 'Intel');
	echo $book->name;
	
	debug($book);