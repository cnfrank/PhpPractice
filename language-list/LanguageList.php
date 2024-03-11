<?php

function language_list(...$items)
{
    $language_list = [];

    foreach ($items as $item) {
        array_push($language_list, $item);
    }

    // implement the language list function
    return $language_list;
}

function add_to_language_list(array $list, string $languages): array
{
    array_push($list, $languages);
    return $list;
}

function prune_language_list($list)
{
    array_shift($list);
    return $list;
}


function current_language($list)
{

    return $list[0];
}

function language_list_length($list)
{
    return count($list);
}