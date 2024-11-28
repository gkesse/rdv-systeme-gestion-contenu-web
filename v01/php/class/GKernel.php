<?php

namespace php\class;

class GKernel
{
    public function __construct() {}

    public function run()
    {
        $this->toMenu();
        $this->toPage();
    }

    private function toMenu()
    {
        echo sprintf("<div class='Menu1'>\n");
        // echo sprintf("<a class='Menu3' href='%s'>\n", $this->toHome());
        // echo sprintf("<img class='Menu4' src='%s' alt='app-logo.png'/>\n", $this->toLogo());
        echo sprintf("<span class='Menu5'>%s</span>\n", $this->toSiteName());
        // echo sprintf("</a>\n");
        //echo sprintf("Menu de l'application...\n");
        echo sprintf("<div class='Bars1' onclick='call_server(\"app\", \"open_menu_bars\", this)'><i class='fa fa-bars'></i></div>\n");
        echo sprintf("</div>\n");
    }

    private function toPage()
    {
        $lPageId = $this->getPageId();
        echo sprintf("Appel de la page (%s)...", $lPageId);
    }

    private function getPageId()
    {
        $lPageId = $this->loadGET("pageId");
        if ($lPageId != "") {
            if (substr($lPageId, -1) == "/") {
                $lPageId = substr($lPageId, 0, -1);
            }
        }
        $lPageId = sprintf("/%s", $lPageId);
        return $lPageId;
    }

    private function loadGET($_key, $_defaultValue = "")
    {
        if (!isset($_GET[$_key])) return $_defaultValue;
        return $_GET[$_key];
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
