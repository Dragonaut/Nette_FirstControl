<?php
// source: C:\web\www\learn.local\app\components/Test.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('1717439592', 'html')
;
// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIMacros::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
echo Latte\Runtime\Filters::escapeHtml($number, ENT_NOQUOTES) ?>

<a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("click!", array(1)), ENT_COMPAT) ?>
">Click!</a>