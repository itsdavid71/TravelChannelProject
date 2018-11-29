<?php include('templates/header.php') ?>
<main>
    <div class="photo3">
        <div class="black">
            <div class="title">
                <h1>Авторизация</h1>
                <?php 
                    $error = (isset($_GET['error']) ? $_GET['error'] : '');
                    switch ($error) {
                        case 'pass_error':
                            echo '<br><div class="fail" style="font-weight: 700;"> Неправильный логин или пароль</div><br>';
                            break;
                        case 'empty_fields':
                            echo '<br>div class="fail" style="font-weight: 700;">Логин или пароль менее трёх символов</div><br>';
                            break;
                    }
                    ?>
                <form class="login" action="handler_login.php" method="POST">
                    <div class="login_ext">Логин<br><input class="input_text" type="text" name="login"></div><br>
                    <div class="login_text">Пароль<br><input class="input_text" type="password" name="pass1"></div> <br>
                    <input type="submit" id="login_btn" value="Авторизоваться"><br>
                    <a href="signup.php" class="link-2" style="text-aligne: center;">Нет аккаунта?</a>

                    
                </form>
            </div>

        </div>
    </div>
</main>
<?php include('templates/footer.php') ?>