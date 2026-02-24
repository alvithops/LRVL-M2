<?php

namespace App\Models;

class Mahasiswa
{
    public static function getAll()
    {
        return [
            ['nama' => 'Andi', 'nim' => '12345'],
            ['nama' => 'Budi', 'nim' => '67890'],
            ['nama' => 'Citra', 'nim' => '54321'],
        ];
    }
}