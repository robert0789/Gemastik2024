<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Destination extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'kategori_id',
        'kota_id',
        'price',
    ];

    // Many-to-Many relationship with itself
    public function toDestinations()
    {
        return $this->belongsToMany(Destination::class, 'destination_destination', 'destination_id', 'to_destination_id')
                    ->withPivot('jarak', 'waktu_tempuh');
    }

    public function kota(){
        return $this->belongsTo('App\Models\Kota')->withTrashed();

    }

    public function kategori(){
        return $this->belongsTo('App\Models\Kategori')->withTrashed();
    }
}
