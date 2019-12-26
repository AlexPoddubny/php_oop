<?php
	
	use classes\{BookProduct, NotebookProduct};
	use classes\interfaces\IGadget;
	use PHPMailer\PHPMailer\PHPMailer;
	
	error_reporting(-1);
	
	
	function autoloader($class)
	{
		echo $class . '<br>';
		$file = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
		if (file_exists($file)) {
			require_once $file;
		}
	}
	
	spl_autoload_register('autoloader');
	
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
	
	offerCase($notebook);
	
	debug($book);
	debug($notebook);
	echo $book->getProduct();
	echo $notebook->getProduct();
	
	$mail = new PHPMailer();
	debug($mail);
