<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZipCode extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'zip_code',
        'district_id',
        'status'
    ];
    // public function cities()
    // {
    //     return $this->hasMany(City::class, 'state_id');
    // }

    // public function activeCities()
    // {
    //     return $this->hasMany(City::class, 'state_id')->where('is_active', 1);
    // }
}
