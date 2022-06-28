<?php

namespace App\Models;

use App\Models\history;
use App\Models\Groups;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friends extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'no_tlp', 'alamat'];

    public function groups()
    {
        return $this->belongsTo(Groups::class);
    }

    public function history()
    {
        return $this->hasOne(history::class);
    }

}