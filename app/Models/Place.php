<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable =['Desa', 'Kabupaten', 'provinsi_id', 'Sehat', 'Sakit', 'Dirawat', 'Sembuh', 'zona_id'];
    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }
    public function zona()
    {
        return $this->belongsTo(Zona::class);
    }
}
