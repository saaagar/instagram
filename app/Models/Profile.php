<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function profileImage(){
       
            return ($this->image) ? "/storage/".$this->image:'http://s3.amazonaws.com/37assets/svn/765-default-avatar.png';
      
    }

    public function followers(){
        return $this->belongsToMany(User::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
