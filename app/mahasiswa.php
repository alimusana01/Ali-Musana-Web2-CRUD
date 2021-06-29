<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['user_id','tgl_lahir','tempat_lahir','telpon','alamat','gender','foto'];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
