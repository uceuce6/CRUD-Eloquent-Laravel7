<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $table = 'pegawai';
    protected $fillable = ['nip', 'nama', 'alamat', 'unit_kerja_id'];
}
