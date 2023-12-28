<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'nama',
        'tanggal_mulai',
        'tanggal_akhir',
        'mulai',
        'akhir',
        'lokasi',
        'deskripsi',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
