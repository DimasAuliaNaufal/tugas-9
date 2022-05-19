<?php

namespace App\Models;

use App\Models\history;
use App\Models\Friends;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function friends()
{
	return $this->hasMany('App\Models\Friends');
}

 // buat relasi dengan table history
 public function history()
 {
     return $this->hasMany(history::class);
 }
}