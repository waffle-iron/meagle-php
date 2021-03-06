<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Software extends Model
{

    protected $fillable = [
        'name',
    ];

    public function versions()
    {
        return $this->hasMany('App\Version');
    }

    /**
     * Returns all the reviews for all versions
     */
    public function reviews()
    {
        return $this->hasManyThrough('App\Review', 'App\Version');
    }

}
