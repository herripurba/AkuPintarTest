<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampusList extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany(User::class, 'follow_campuses', 'user_id', 'campus_id');
    }
    public function jurusanCampus()
    {
        return $this->hasMany(JurusanCampus::class, 'campus_id');
    }
}
