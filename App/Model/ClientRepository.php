<?php

namespace App\Model;

use App\Lib\Conn;
use App\Lib\Config;
use App\Model\Entity\Client;
use Peridot\Core\TestResult;

class ClientRepository
{
    private static $DATA = [];



    public function __construct()
    {
    }

    public static function all()
    {
        return self::$DATA;
    }

    public static function add($post)
    {
        $post->id = count(self::$DATA) + 1;
        self::$DATA[] = $post;
        self::save();
        return $post;
    }

    public static function findById(int $id)
    {
        foreach (self::$DATA as $post) {
            if ($post->id === $id) {
                return $post;
            }
        }
        return [];
    }

    public static function load()
    {
        $DB_PATH = Config::get('DB_PATH', __DIR__ . '/../../db.json');
        self::$DATA = json_decode(file_get_contents($DB_PATH));
    }

    public static function save()
    {
        $conn = new Conn();
        $query = 'INSERT INTO cliente (nome, data_nascimento, cpf, rg, telefone, data_criacao) VALUES ("teste", "1993-05-10", "02641028000","","12 981362056", "2020-12-12")';
        $conn->query($query);
    }
    
}
