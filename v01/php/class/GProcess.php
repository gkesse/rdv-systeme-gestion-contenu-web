<?php

namespace php\class;

class GProcess extends GObject
{
    private $m_menu = null;

    public function __construct()
    {
        parent::__construct();
        //$this->m_menu = new GMenu();
    }

    public function init()
    {
        $this->toHeader();
    }

    public function run()
    {
        echo sprintf("Démarrage de l'application...\n");
    }

    public function runFooter()
    {
        echo sprintf("</div>\n");
        echo sprintf("</body>\n");
        echo sprintf("</html>\n");
    }

    private function toHeader()
    {
        echo sprintf("<!DOCTYPE html>\n");
        echo sprintf("<html lang='fr'>\n");
        echo sprintf("<head>\n");
        echo sprintf("<title>%s</title>\n", $this->toTitle());
        echo sprintf("<meta charset='UTF-8'/>\n");
        echo sprintf("<link rel='shortcut icon' type='image/png' href='%s'/>\n", $this->toLogo());
        echo sprintf("<meta name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, user-scalable=no'/>\n");
        echo sprintf("</head>\n");
        echo sprintf("<body>\n");
        echo sprintf("<div class='Html2 HtmlPage'>\n");
    }

    private function toTitle()
    {
        $lTitle = $this->toSiteName();
        // $lCurrentMenu = $this->m_menu->toCurrentMenu();
        // if ($lCurrentMenu->getTitle() != "") {
        //     $lTitle = sprintf("%s | %s", $lTitle, $lCurrentMenu->getTitle());
        // }
        return $lTitle;
    }

    private function toSiteName()
    {
        return "ReadyCms";
    }

    public function toLogo()
    {
        return "/data/img/app-logo.png";
    }
}
