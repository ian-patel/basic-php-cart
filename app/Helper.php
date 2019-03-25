<?php

if (! function_exists('hasAction')) {
    /**
     * Determine the page has action
     *
     * @return boolean
     */
    function hasAction(string $action): bool
    {
        return input('action') === $action;
    }
}

if (! function_exists('input')) {
    /**
     * Get input from post/get
     *
     * @param string $query
     * @return mixed|null
     */
    function input(string $query)
    {
        return $_GET[$query] ?? $_POST[$query] ?? null;
    }
}

if (! function_exists('readCookie')) {
    /**
     * Get input from post/get
     *
     * @param string $query
     * @return mixed|null
     */
    function readCookie(string $cookieName)
    {
        return $_COOKIE[$cookieName] ?? null;
    }
}

if (! function_exists('back')) {
    /**
     * Redirect to back
     */
    function back()
    {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
