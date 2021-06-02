<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class School extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function attendee() {
        return $this->hasMany(Attendee::class);
    }

    public function competition() {
        return $this->belongsTo(Competition::class);
    }
}
