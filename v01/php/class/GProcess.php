<?php

namespace php\class;

class GProcess
{
    public function __construct() {}

    public function init()
    {
        $this->toHeader();
    }

    public function run()
    {
        $lEnv = GEnv::Instance();
        if ($lEnv->isTestEnv()) {
            echo sprintf("Démarrage de l'application (TEST)...\n");
        } else {
            echo sprintf("Démarrage de l'application (PROD)...\n");
        }
    }

    public function runFooter()
    {
        echo sprintf("</div>\n");
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
        $this->toStyleCss();
        echo sprintf("</head>\n");
        echo sprintf("<body>\n");
        echo sprintf("<div class='Html1'>\n");
        echo sprintf("<div class='Background1'></div>\n");
        echo sprintf("<div class='Background2'></div>\n");
        echo sprintf("<div class='Background3'></div>\n");
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

    private function toLogo()
    {
        return "/data/img/app-logo.png";
    }

    private function toStyleCss()
    {
        echo sprintf("<link rel='stylesheet' href='/css/styles.css'/>\n");
    }
}
