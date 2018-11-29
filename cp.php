<?php include('templates/header.php') ?>
<main>
    <div class="photo4">
        <div class="black">
            <div class="title">
                <h1>Личный кабинет</h1>
                <!-- <?php 
                include('db.php');
                $query = "SELECT * FROM users";
                $result = mysqli_query($link, $query);
                $user = mysqli_fetch_assoc($result);
                echo "<h3>{$user['login']}</h3>";

                ?> -->
                <h1><a href="login.php" class="link-2">Выйти</a></h1>
            </div>

        </div>
    </div>
</main>
<?php include('templates/footer.php') ?>