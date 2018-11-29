<?php include('templates/header.php'); ?>
<main>
    <div class="photo3">
        <div class="black">
            <div class="title">
                <h1>Регистрация</h1>
                <form class="login" action="handler.php" method="POST">
                    <div class="input_l"><div class="login_text">Логин</div> <input class="input_text" type="text" name="login"></div> <br>
                    <div class="input_p"><div class="login_text">Пароль</div> <input class="input_text"  type="password" name="pass1"></div> <br>
                    <div class="input_p"><div class="login_text">Повторите пароль</div> <input class="input_text"  type="password" name="pass2"></div> <br>
                    <div class="input_e"><div class="login_text">Email</div> <input class="input_text"  type="email" name="email"></div> <br>
                    <div class="input_g"><div class="login_text">Пол</div><br>
                        <span class="radio"><input class="radio"type="radio" name="gender" value="man">Мужской</span>
                        <span class="radio"><input class="radio" type="radio" name="gender" value="woman">Женский</span>
                    </div> <br>

                    <input type="submit" id="login_btn" value="Зарегистрироваться">
                    <?php 
                    $error = (isset($_GET['error']) ? $_GET['error'] : '');
                    switch ($error) {
                        case 'pass_error':
                            echo '<br><br><div class fail>Пароли не совпадают</div>';
                            break;
                        case 'empty_fields':
                            echo '<br><br><div class fail>Заполните все поля</div>';
                            break;
                        case 'login_exist':
                            echo '<br><br><div class fail>Пользователь с таким логином уже существует</div>';
                            break;
                        case 'email_exist':
                            echo '<br><br><div class fail>Данный Email уже используется</div>';
                            break;
                        case 'db_error': 
                            echo '<br><br><div class fail>Сбой данных. Попробуйте еще раз</div>';
                            break;
                    }
                ?>
                </form>
            </div>

        </div>
    </div>
</main> 
<?php include('templates/footer.php'); ?>