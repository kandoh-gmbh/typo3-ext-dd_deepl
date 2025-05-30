<?php

call_user_func(function (): void {
    $fields = [
        'cache_tags',
        'target',
        'TSconfig',
    ];
    foreach ($fields as $field) {
        $GLOBALS['TCA']['pages']['columns'][$field]['translateWithDeepl'] = false;
    }
});
