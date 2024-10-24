<?
    $title='Главная';
    ob_start(); 
?>
<div class="projects-box">
    <?
        $link = mysqli_connect("localhost", "root", "", "myproject") or die('Нет подключения к БД!');
        $result = mysqli_query($link, 'SELECT * FROM `projects`');
        while($row = $result->fetch_assoc())
        {
            $name=$row['Name'];
            $image='././resources/images/projects/'.$row['Image'];
            $text=$row['Description'];
            $id = $row['ID'];
            include('views/templates/cell.php');
        }
    ?>
</div>
<?
    $maintext = ob_get_clean();
    include('views/templates/main.php');
?>
