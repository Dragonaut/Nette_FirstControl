<?php
namespace Test;
use Nette\Application\UI\Control;

class Test extends Control 
{
	/** @var int @persistent */
	public $number = 1;

	public function render()
	{
		$this->template->setFile(__DIR__ . '/Test.latte');
		$this->template->number = $this->number;
		$this->template->render();
	}

	public function handleClick($add)
	{
		$this->number += $add;
        if(!$this->presenter->isAjax()) {
            $this->redirect('this');
        } else {
            $this->redrawControl();
        }
	}
}

