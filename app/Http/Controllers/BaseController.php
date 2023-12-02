<?php

namespace Shaon\App\Http\Controllers;

class BaseController
{
    protected function render($view, $data)
    {
        ob_start();
        extract($data);
        include __DIR__ . '/../../../resources/views/' . $view . '.blade.php';
        return ob_get_clean();
    }
}