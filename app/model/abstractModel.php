<?php

namespace App\Model;

use MysqliDb as DB;

abstract class abstractModel
{

    protected $db;
    protected $data = [];

    public function __construct(DB $db)
    {
        $this->db = $db;
    }

    public function get($key = '')
    {
        if ($key == '')
        {
            return $this->data;
        }

        if ($key != '' && isset($this->data[$key]))
        {
            return $this->data[$key];
        }
        else
        {
            return '';
        }
    }

}
