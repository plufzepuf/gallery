<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Gallery.com</title>
</head>
<body>
    <header class="header">
        <div class="header_div-bigLine">
        </div>
        <div class="header_div-logo">
            <p class="header__div_p-logoBig">Gallery</p>
            <p class="header__div_p-logoLil">closet</p>
        </div>
        <div class="header_div-preface">
            <p class="header__div_p-caption">Предисловие</p>
            <p class="header__div_p-text"><br>Gallery closet - это виртуальное хранилище вещей, их истории, мнение о них. 
                <br>На создание этого проекта меня натолкнула моя привязанность к одежде, любовь к брендам и стилю. 
                <br>Сама концепция очень проста: на сайте представлен каталог из вещей, которые находятся у меня в гардеробе, к каждой вещи прилагается история появления в моей коллекции, как часто я её ношу, с чем сочетаю, какие есть повреждения или особенности. 
                Вы можете оценить мой гардероб или пополнить список желаемых покупок.
                <br>Приятного просмотра!
                <br><br><br>
                Вадим Ш.В.  </p>
        </div>
    </header>
    <main class="main">
        <div class="main_div">
            <a href="index.html" id="stock" class="main_div-butt">ГАЛЕРЕЯ</a>
            <a href="index.php" id="comm" class="main_div-butt">КОММЕНТАРИИ</a>
        </div>
        <article class="main_div-infoArea">
        <form class="form" action="css/form.php" method="post">
            <div>
                <label for="name">Ваше имя:</label>
                <input class="info" type="text" name="name" id="name" required>
            </div>
            <div>
                <label for="mail">Также ваша почта:</label>
                <input class="info" type="email" name="mail" id="amil" required>
            </div> 
            <div id="commen">  
                <label for="comm">Место для вашего самовыражения:</label>
                <textarea name="comm" id="comm" cols="250" rows="10" required></textarea>
            </div>   
            <button class="butt" type="submit">Отправить</button>  
        </form>
        </article>
    </main>
    <script src="js/script.js"></script>
    <footer>
    <div class="footer_div-create">
        create by Вадим Ш.В.
    </div>
    </footer>
</body>
</html>
