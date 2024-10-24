<?
    $title='Главная';
    ob_start(); 
    $link = mysqli_connect("localhost", "root", "", "myproject") or die('Нет подключения к БД!');
    $result = mysqli_query($link, 'SELECT * FROM `projects` WHERE `ID` = '.$_GET['id']);
    $row = $result->fetch_assoc();
?>
    <div class="project-box">
        <div class="name"><hr/><p><?=$row['Name'];?></p><hr/></div>
        <div class="text"><?=$row['Text'];?></div>
    </div>
<?
    $maintext = ob_get_clean();
    include('views/templates/main.php');
?>
