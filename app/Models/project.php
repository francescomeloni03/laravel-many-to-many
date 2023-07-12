<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description",
        
    ];


    public function type()
{
    return $this->belongsTo(Type::class);
}
}
