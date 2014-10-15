<?php
// source: C:\web\www\learn.local\app\components/Test.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('6498635849', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block _
//
if (!function_exists($_b->blocks['_'][] = '_lb76a1e0a787__')) { function _lb76a1e0a787__($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl(false, FALSE)
;echo Latte\Runtime\Filters::escapeHtml($number, ENT_NOQUOTES) ?>

<a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("click!", array(1)), ENT_COMPAT) ?>" class="ajax">Click!</a>

<table>
	<tr>
		<th>Input</th>
		<th>Akce</th>
	</tr>
	<tr>
		<?php Nette\Bridges\FormsLatte\FormMacros::renderFormBegin($form = $_form = $_control["testForm"], array('class'=>"ajax")) ?>

			<td><?php echo $_form["number"]->getControl() ?></td>
			<td><input type="submit" name="test" value="add"></td>
		<?php Nette\Bridges\FormsLatte\FormMacros::renderFormEnd($_form) ?>

	</tr>
</table>

<?php
}}

//
// end of blocks
//

// template extending

$_l->extends = empty($_g->extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $_g->extended = TRUE;

if ($_l->extends) { ob_start();}

// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIMacros::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); } ?>
<div id="<?php echo $_control->getSnippetId('') ?>"><?php call_user_func(reset($_b->blocks['_']), $_b, $template->getParameters()) ?>
</div>