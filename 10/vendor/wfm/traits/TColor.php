<?php
	
	namespace wfm\traits;
	
	trait TColor
	{
		private $color;
		
		/**
		 * @return mixed
		 */
		public function getColor()
		{
			return $this->color;
		}
		
		/**
		 * @param mixed $color
		 */
		public function setColor($color)
		{
			$this->color = $color;
		}
		
	}