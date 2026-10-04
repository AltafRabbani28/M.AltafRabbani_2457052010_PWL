<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';

    protected $fillable = [
        'nama_kelas'
    ];

    public function getKelas()
    {
        return $this->all();
    }

    public function user()
    {
        return $this->hasMany(UserModel::class, 'kelas_id');
    }
}