<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
	protected $table = 'games';

    protected $fillable = [
        'km_route','total_points'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function challenge()
    {
    	return $this->hasMany(Challenges::class);
    }
}
