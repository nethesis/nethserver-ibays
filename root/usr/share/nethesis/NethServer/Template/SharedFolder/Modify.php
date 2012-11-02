<?php

/* @var $view \Nethgui\Renderer\Xhtml */
$view->requireFlag($view::INSET_FORM);

if ($view->getModule()->getIdentifier() == 'update') {
    $keyFlags = $view::STATE_READONLY;
    $template = 'Edit shared folder `${0}`';
} else {
    $keyFlags = 0;
    $template = 'Create a new shared folder';
}

echo $view->header('ibay')->setAttribute('template', $view->translate($template));
$baseTab = $view->panel()->setAttribute('name', "BaseInfo")
    ->insert($view->textInput('ibay', $keyFlags))
    ->insert($view->textInput('Description'))
    ->insert($view->selector('OwningGroup', $view::SELECTOR_DROPDOWN))
    ->insert($view->checkBox('GroupAccess', 'rw')->setAttribute('uncheckedValue', 'r'))
    ->insert($view->checkBox('OtherAccess', 'r')->setAttribute('uncheckedValue', ''))
;

$aclTab = $view->panel()->setAttribute('name', "Acl")
    ->insert($view->objectPicker()
    ->setAttribute('objects', 'AclSubjects')
    ->insert($view->checkBox('AclRead', FALSE, $view::STATE_CHECKED))
    ->insert($view->checkBox('AclWrite', FALSE))
);

echo $view->tabs()
    ->insert($baseTab)
    ->insertPlugins()
    ->insert($aclTab)
;

echo $view->buttonList($view::BUTTON_SUBMIT | $view::BUTTON_CANCEL | $view::BUTTON_HELP);

