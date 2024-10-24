<?
    if(!empty($_SERVER['REQUEST_URI']))
    {
        $tmp = explode('?', $_SERVER['REQUEST_URI']);
        switch (reset($tmp))
        {
            case '/': 
                include('views/pages/blog.php');
                break;
            case '/projects': 
                include('views/pages/projects.php');
                break;
            case '/project': 
                include('views/pages/project.php');
                break;    
            default:
                include('views/pages/blog.php');
                break;
        }
    }
?>