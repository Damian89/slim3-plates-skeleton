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
            throw new \Exception('No value for key');
        }
    }

    public function set($key, $value)
    {
        if ($key != '')
        {
            $this->data[$key] = $value;
        }
        else
        {
            throw new \Exception('Key invalid');
        }
    }

}
