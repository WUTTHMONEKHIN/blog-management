<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'user_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
