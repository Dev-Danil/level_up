<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authorization</title>
    <style>
        .form_auth_block{
            width: 500px;
            height: 500px;
            margin: 0 auto;
            background: #dedede;
            background-size: cover;
            border-radius: 4px;
        }
        .form_auth_block_content{
            padding-top: 15%;
        }
        .form_auth_block_head_text{
            display: block;
            text-align: center;
            padding: 10px;
            font-size: 20px;
            font-weight: 600;
            background: #ffffff;
            opacity: 0.7;
        }
        .form_auth_block label{
            display: block;
            text-align: center;
            padding: 10px;
            background: #ffffff;
            opacity: 0.7;
            font-weight: 600;
            margin-bottom: 10px;
            margin-top: 10px;
        }
        .form_auth_block input{
            display: block;
            margin: 0 auto;
            width: 80%;
            height: 45px;
            border-radius: 10px;
            border:none;
            outline: none;
        }
        input:focus {
            color: #000000;
            border-radius: 10px;
            border: 2px solid #436fea;
        }
        .form_auth_button{
            display: block;
            width: 80%;
            margin: 0 auto;
            margin-top: 10px;
            border-radius: 10px;
            height: 35px;
            border: none;
            cursor: pointer;
        }
        ::-webkit-input-placeholder {color:#3f3f44; padding-left: 10px;} // Это стили для placeholder
        ::-moz-placeholder          {color:#3f3f44; padding-left: 10px;} // Это стили для placeholder
        :-moz-placeholder           {color:#3f3f44; padding-left: 10px;} // Это стили для placeholder
        :-ms-input-placeholder      {color:#3f3f44; padding-left: 10px;} // Это стили для placeholder
    </style>
</head>
<body>

<div class="form_auth_block">
    <div class="form_auth_block_content">
        <p class="form_auth_block_head_text">Авторизация</p>
        <form class="form_auth_style" action="Controller.php" method="post">
            <label>Введите Ваш имейл</label>
            <input type="email" name="email" placeholder="Введите Ваш имейл" required >

            <label>Введите Ваш пароль</label>
            <input type="password" name="pass" placeholder="Введите пароль" required >
            <button class="form_auth_button" type="submit" name="form_auth_submit">Войти</button>
        </form>
    </div>
</div>

</body>
</html>