<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'email', 'jabatan_id'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
}
