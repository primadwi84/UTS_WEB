<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $table = "provinsi";
    protected $primaryKey = "id";
    protected $fillable =['id','provinsi'];

    public function place()
    {
        return $this->hasMany(Place::class);
    }

}
