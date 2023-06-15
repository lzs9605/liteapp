<?php

namespace LiteApp;

abstract class app
{

    const VERSION = '1.0.1';

    /**
     * @var \LiteApp\LiteApp
     */
    public static $Lite;

    protected $DT_TIME, $DT_IP, $db;

    public function __construct()
    {
        global $DT_IP;
        $this->DT_TIME = self::$Lite->DT_TIME;
        $this->DT_IP = $DT_IP;
        $this->db = self::$Lite->db;
    }

}