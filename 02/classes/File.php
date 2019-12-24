<?php
	
	
	class File
	{
		
		public $content;
		public $handle;
		public $fname;
		
		public function __construct($fname)
		{
			$this->fname = $fname;
			if (!$this->handle = fopen($this->fname, 'a')){
				return false;
			}
			$this->content = file_get_contents($this->fname);
			return $this->content;
		}
		
		public function write($text)
		{
			if (fwrite($this->handle, $text) === FALSE) {
				echo "Не могу произвести запись в файл ($this->fname)";
				return false;
			}
			return true;
		}
		
		public function __destruct()
		{
			fclose($this->handle);
		}
		
	}