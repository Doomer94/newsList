<?php
class module_news
{
    function listNews()
    {
        include 'configs/database.php';
        $result       = $mysqli->query("SELECT * FROM news");
        $array_result = array();
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $array_result[] = $row;
        }
        $result->close();
        return $array_result;
        ;
    }
    
    function singlePage($url)
    {
        include 'configs/database.php';
        $url    = str_replace('action_', '', $url);
        $result = $mysqli->query("SELECT * FROM news WHERE url='${url}' ");
        $row    = $result->fetch_array(MYSQLI_ASSOC);
        $result->close();
        return $row;
    }
    function delNews($id)
    {
        include 'configs/database.php';
        $result = $mysqli->query("DELETE FROM news WHERE id='${id}'");
        if ($result == true) {
            echo '<script type="text/javascript">window.location = "/news"</script>';
        }
        $result->close();
    }

    function editNews ($id) {
    	include 'configs/database.php';
        $result = $mysqli->query("SELECT * FROM news WHERE id='${id}'");
        $row    = $result->fetch_array(MYSQLI_ASSOC);
        $result->close();
        return $row;
    }

    function action_index()
    {
        $data             = $this->listNews();
        $content_template = "news-list.php";
        include 'templates/main.php';
        if (isset($_POST['delNews'])) {
            $this->delNews($_POST['delNews']);
        }

    }
    function action($action)
    {
        if ($action == 'action_add') {
            $content_template = "news-add.php";
            include 'templates/main.php';
            $data = 'data';
            //-------------------------
            if (isset($_POST['title']) && isset($_POST['alias'])) {
                // Переменные с формы
                include 'configs/database.php';
                $title      = $_POST['title'];
                $alias      = $_POST['alias'];
                $short_post = $_POST['short_post'];
                $post       = $_POST['post'];
                $date       = $_POST['date'];



                $result     = $mysqli->query("INSERT INTO `news`(`date`, `title`, `url`, `short_post`, `post`) VALUES ('$date','$title','$alias','$short_post','$post')");
                if ($result == true) {
                    echo '<script type="text/javascript">window.location = "/news"</script>';
                } else {
                    echo "Информация не занесена в базу данных";
                }
            }
        } 
        if ( isset($action) && !($action == 'action_add') && !($action == 'action_index') && !(strpos($action, 'edit') !== false) ) 
         {
            $data             = $this->singlePage($action);
            $content_template = "news.php";
            include 'templates/main.php';
            //$data = $this->get_data();
            //$content_template = "news.php";
            //include 'templates/main.php';
        }
        if (strpos($action, 'edit') !== false) {

        	$id = explode('-', $action);
        	$id = $id['1'];
    		$data             = $this->editNews($id);
            $content_template = "news-edit.php";
            include 'templates/main.php';


            if (isset($_POST['title']) && isset($_POST['alias'])) {
                
                include 'configs/database.php';
                $title      = $_POST['title'];
                $alias      = $_POST['alias'];
                $short_post = $_POST['short_post'];
                $post       = $_POST['post'];
                $date       = $_POST['date'];
                $result     = $mysqli->query("UPDATE `news` SET `date`='$date',`title`='$title',`url`='$alias',`short_post`='$short_post',`post`='$post' WHERE id='${id}'");

                if ($result == true) {
                    echo '<script type="text/javascript">window.location = "/news"</script>';
                } else {
                    echo "Информация не занесена в базу данных";
                }
            }
		}

    }
}
?>