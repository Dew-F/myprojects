<?
    $title='Главная';
    ob_start(); 
?>
<?
    $name='Eshop';
?>  
    <div class="blog">
        <img class="img-1" src="././resources/images/blog/s2.png"/>
        <div class="blog-box">
            <div class="image-box">
                <img src="././resources/images/blog/F1.jpg"   />
                <div class="contact-box">
                    <p class="nickname">FalseDew</p>
                    <p class="email">Email: falsedew@internet.ru</p>
                    <p class="tg">Telegram: @DewDFD</p>
                </div>
            </div>
            <div class="text-box">
                <p class="title-name">False Dew</p>
                <p class="title-prof">Бэкенд</p>
                <p class="text">
                    Основное направление бэкенд.<br/>
                    Разрабатываю:<br/>
                    &emsp;- Сайты (HTML, CSS, JS/JQuery, PHP, MySQL, Laravel)<br/>
                    &emsp;- Десктоп приложения (С#, WPF, MSSQLServer)<br/>
                    &emsp;- Игры (Unity, C#)<br/>
                </p>
            </div>
        </div>
        <img class="img-2" src="././resources/images/blog/s2.png"/>
    </div>
<?
    $maintext = ob_get_clean();
    include('views/templates/main.php');
?>
