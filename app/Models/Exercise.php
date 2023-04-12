<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'src'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function repetition(){
        return $this->hasMany(Repetition::class);
    }
}
