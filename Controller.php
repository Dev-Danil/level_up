<?php

session_start();
index();

function index()
{
    $email = testForEmptiness($_POST['email']);
    $hashPass = md5(testForEmptiness($_POST['pass']));

    $dataCsv = array_map('str_getcsv', file("storage.csv"));

    $emailPassword = checkEmail($email, $dataCsv);
    print_r($emailPassword);

    if ($emailPassword) {
        if (isCorrectPassword($emailPassword, $hashPass)) {
            var_dump(getListEmail($dataCsv));
            $_SESSION["listEmail"] = getListEmail($dataCsv);
            header("location: ShowEmails.php");
        }
    } else {
        echo 'Некорректный e-mail. ';
        $_SESSION["status"] = "100";
        header("location: Index.php");
    }
}

/** Проверка на пустоту
 * @param string $v
 * @return string
 */
function testForEmptiness(string $v): string
{
    if ($v) {
        return $v;
    } else {
        $_SESSION["status"] = "300";
        header("location: Index.php");
    }
}

/** Проверка почты на нахождение в файле
 * @param string $email
 * @param array $csv фалй с логинами и паролями
 * @return mixed|null
 */
function checkEmail(string $email, array $csv)
{
    foreach ($csv as $one) {
        $arrEmails[] = $one[0];

        if ($one[0] === $email) {
            return $one;
        }
    }

    return null;
}

/** Корректен ли пароль
 * @param array $emailPassword массив [0 => логин, 1 => пароль]
 * @param string $hashPass зашифрованный пароль
 * @return bool
 */
function isCorrectPassword(array $emailPassword, string $hashPass): bool
{
    if ($emailPassword[1] !== $hashPass) {
        $_SESSION["status"] = "200";
        header("location: Index.php");
        return false;
    }

    return true;
}

/** Получить список e-mail из файла
 * @param array $csv файл
 * @return array
 */
function getListEmail(array $csv): array
{
    $arrEmails = [];

    foreach ($csv as $one) {
        $arrEmails[] = $one[0];
    }

    return $arrEmails;
}
