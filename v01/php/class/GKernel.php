<?php

namespace php\class;

class GKernel
{
    public function __construct() {}

    public function run()
    {
        $this->toMenu();
    }

    private function toMenu()
    {
        echo sprintf("<div class='Menu1'>\n");
        // echo sprintf("<a class='Menu3' href='%s'>\n", $this->toHome());
        // echo sprintf("<img class='Menu4' src='%s' alt='app-logo.png'/>\n", $this->toLogo());
        echo sprintf("<span class='Menu5'>%s</span>\n", $this->toSiteName());
        // echo sprintf("</a>\n");
        //echo sprintf("Menu de l'application...\n");
        //echo sprintf("<div class='Bars1'>Bars</div>\n");
        echo sprintf("</div>\n");
    }

    private function toHome()
    {
        return "/home";
    }

    private function toLogo()
    {
        return "/data/img/app-logo.png";
    }

    private function toSiteName()
    {
        return "ReadyCms";
    }
}