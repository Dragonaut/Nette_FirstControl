<?php
namespace Test;
use Nette\Application\UI\Control;
use Nette\Application\UI\Form;

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

	protected function createComponentTestForm()
    {
        $form = new Form;
    	$form->onSuccess[] = $this->processTestForm;

        $form->addText('number', 'Číslo:')->addRule(Form::INTEGER, 'Vstupem musí být číslo.');
        
        return $form;
    }

    public function processTestForm(\Nette\Application\UI\Form $form)
    {
        $values = $form->getValues();

        $this->number = $values['number'];

        if(!$this->presenter->isAjax()) {
            $this->redirect('this');
        } else {
            $this->redrawControl();
        }
    }

}

