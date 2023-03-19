<?php

namespace App\Views;

class View
{
    private string $templatesDir;

    public function __construct(string $templatesDir)
    {
        $this->templatesDir = $templatesDir;
    }

    public function render(string $templateName, array $vars = []): void
    {

        $templatePath = $this->templatesDir . '/' . $templateName . '.php';

        extract($vars);

        ob_start();
        include $templatePath;
        $content = ob_get_clean();

        echo $content;
    }
}
