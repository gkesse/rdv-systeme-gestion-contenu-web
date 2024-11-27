<?php

namespace php\class;

class GEnv
{
    private static $m_instance = null;
    private $m_envType = "";

    private function __construct()
    {
        $this->initEnv();
    }

    public static function Instance()
    {
        if (self::$m_instance == null) {
            self::$m_instance = new GEnv();
        }
        return self::$m_instance;
    }

    public function isTestEnv()
    {
        return ($this->m_envType == "TEST");
    }

    private function loadEnv($_env, $_defaultValue = "")
    {
        $lEnv = getenv($_env);
        return  $lEnv ? $lEnv : $_defaultValue;
    }

    private function initEnv()
    {
        $this->m_envType = $this->loadEnv("ENV_TYPE");
    }
}
