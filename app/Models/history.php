<?php

namespace App\Models;

use App\Models\Friends;
use App\Models\Groups;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class history extends Model
{
    use HasFactory;

    protected $fillable = [
        'friends_id', 'groups_id', 'status'
    ];

    // Buat Relasi Dengan Table Anggota
    public function friends()
    {
        return $this->belongsTo(friends::class);
    }

    // Buat Relasi Dengan Table Group
    public function groups()
    {
        return $this->belongsTo(groups::class);
    }
}