<?php

showEmails();

/**
 * Показать список e-mail
 */
function showEmails()
{
    session_start();
    var_dump($_SESSION["listEmail"]);
    session_unset();
    session_destroy();
}

