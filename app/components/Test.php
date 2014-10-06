<?php
namespace Test;
use Nette\Application\UI\Control;

class Test extends Control 
{
	public function render($number = 1)
	{
		$this->template->setFile(__DIR__ . '/Test.latte');
		$this->template->number = $number;
		$this->template->render();
	}

	public function handleClick($number)
	{
		//The variable 'number' does not exist in template.
		$this->template->number = $this->template->number + $number;
	}
}

