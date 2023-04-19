<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diagnosa extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'diagnosa';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'diagnosa',

    ];

    public function user()
    {
        return $this->hasMany(User::class, 'id', 'id');
    }
}
