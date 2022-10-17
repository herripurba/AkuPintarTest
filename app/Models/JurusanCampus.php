<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JurusanCampus extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function campusList()
    {
        return $this->belongsTo(CampusList::class, 'campus_id');
    }
}
