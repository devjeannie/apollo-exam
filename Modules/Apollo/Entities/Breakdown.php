<?php

namespace Modules\Apollo\Entities;

use Illuminate\Database\Eloquent\Model;

class Breakdown extends Model
{
	protected $table = 'breakdown';
    protected $fillable = [
    	'values',
    	'random_id'
    ];

     public function random() {
        return $this->belongsTo('Modules\Apollo\Entities\Random', 'random_id');
    }
}
