<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{   
    
    protected $fillable = ['titre', 'debut', 'fin'];

    public function cv() {
    	return $this->belongsTo("App\Cv");
    }
}
