<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    protected $table = "zona";
    protected $primaryKey = "id";
    protected $fillable =['id','zona'];

    public function place()
    {
        return $this->hasMany(Place::class);
    }
}
