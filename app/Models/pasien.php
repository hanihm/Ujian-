<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;
    protected $table = 'pasien';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'no_rm',
        'nama',
        'umur',
        'jenis_kelamin',
        'id_diagnosa',

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'id');
    }
}
