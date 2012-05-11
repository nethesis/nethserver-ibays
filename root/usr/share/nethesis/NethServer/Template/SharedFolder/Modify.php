<?php
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
    ->insert($view->textInput('Name'))
;

foreach ($view['Plugin'] as $pluginView) {        
    $baseTab->insert($view->literal($pluginView));
}

$permissionTab = $view->panel()->setAttribute('name', 'Permissions')
    ->insert($view->selector('Group', $view::SELECTOR_DROPDOWN)->setAttribute('choices', 'OwnersDatasource'))
    ->insert($view->columns()
    ->insert($view->fieldset()->setAttribute('template', 'Read permissions') //->setAttribute('icon-before', 'ui-icon-folder-open')
        ->insert($view->radioButton('read', 'admin'))
        ->insert($view->radioButton('read', 'group'))
        ->insert($view->radioButton('read', 'everyone')))
    ->insert($view->fieldset()->setAttribute('template', 'Write permissions') //->setAttribute('icon-before', 'ui-icon-locked')->setAttribute('icon-before', 'ui-icon-disk')
        ->insert($view->radioButton('write', 'admin'))
        ->insert($view->radioButton('write', 'group'))
        ->insert($view->radioButton('write', 'everyone')))
);


$aclTab = $view->panel()->setAttribute('name', "Acl")
    ->insert($view->objectPicker()
    ->setAttribute('objects', 'AclSubjects')
    ->insert($view->checkBox('AclRead', FALSE, $view::STATE_CHECKED))
    ->insert($view->checkBox('AclWrite', FALSE))
);

echo $view->tabs()->insert($baseTab)->insert($permissionTab)->insert($aclTab);

echo $view->buttonList($view::BUTTON_SUBMIT | $view::BUTTON_CANCEL | $view::BUTTON_HELP);

