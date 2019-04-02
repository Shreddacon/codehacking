<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    
    Protected $uploads = '/images/';
    
    protected $fillable = ['file'];
  
    public function getFileAttribute($photo) {
        
        return $this->uploads . $photo;
        
    }
}
