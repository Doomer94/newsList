<?php
class Route
{
    static function start()
    {
        // контроллер и действие по умолчанию
        $module_name = 'Main';
        $action_name = 'index';
        
        $routes = explode('/', $_SERVER['REQUEST_URI']);
        
        // получаем имя контроллера
        if (!empty($routes[1])) {
            $module_name = $routes[1];
        }
        
        // получаем имя экшена
        if (!empty($routes[2])) {
            $action_name = $routes[2];
        }
        if ($module_name == 'Main') {
            header("Location: /news");
            exit;
        }
        // добавляем префиксы
        $module_name = 'module_' . $module_name;
        //$controller_name = 'Controller_'.$controller_name;
        $action_name = 'action_' . $action_name;
        // подцепляем файл с классом модели (файла модели может и не быть)
        $module_file = strtolower($module_name) . '.php';
        $module_path = "modules/" . $module_file;
        
        if (file_exists($module_path)) {
            include "modules/" . $module_file;
        }
        $module = new $module_name;
        $action = $action_name;
        
        if (!($action == 'action_index')) {
            $module->action($action);
        } else {
            if (method_exists($module, $action)) {
                // вызываем действие контроллера
                $module->$action();
            } else {
                // здесь также разумнее было бы кинуть исключение
                Route::ErrorPage404();
            }
        }
        
        // подцепляем файл с классом контроллера
        //$controller_file = strtolower($controller_name).'.php';
        //ler_file;
        //if(file_exists($controller_path))
        //{
        //    include "main/controllers/".$controller_file;
        //}
        //else
        //{
        /*
        правильно было бы кинуть здесь исключение,
        но для упрощения сразу сделаем редирект на страницу 404
        */
        //Route::ErrorPage404();
        //}
        
        // создаем контроллер
        //$controller = new $controller_name;
        //$action = $action_name;
        
        //if(method_exists($controller, $action))
        //{
        // вызываем действие контроллера
        //    $controller->$action();
        //}
        //else
        //{
        // здесь также разумнее было бы кинуть исключение
        //Route::ErrorPage404();
        //}
        
    }
    
    function ErrorPage404()
    {
        $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:' . $host . '404');
    }
}
?>