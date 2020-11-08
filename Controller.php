<?php

    $email = $_POST['email'];
    $hashPass = md5($_POST['pass']);
//    echo $hashPass;

    $csv = array_map('str_getcsv', file("storage.csv"));

    $arrEmailLogin = [];
    $arrEmails = [];

    foreach ($csv as $one) {
        $arrEmails[] = $one[0];

        if ($one[0] === $email) {
            echo 'Корректный e-mail. ';
            $arrEmailLogin = $one;
            break;
        }
    }

    if (!empty($arrEmailLogin)) {
        if ($arrEmailLogin[1] === $hashPass) {
            var_dump($arrEmails);
        } else {
            echo 'Некорректный пароль. ';
//          header('Location: http://localhost:8080 ');
        }
    } else {
        echo 'Некорректный e-mail. ';
//      header('Location: http://localhost:8080 ');
    }
