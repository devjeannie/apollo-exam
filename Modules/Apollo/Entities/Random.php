<?php

namespace Modules\Apollo\Entities;

use Illuminate\Database\Eloquent\Model;

class Random extends Model
{
	protected $table = 'random';
    protected $fillable = [
    	'values',
    	'flag'
    ];

    public function breadowns() {
        return $this->hasMany('Modules\Apollo\Entities\Breakdown', 'random_id');
    }
}
