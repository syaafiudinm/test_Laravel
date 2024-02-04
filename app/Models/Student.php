<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'score',
        'teacher_id'
    ];
   

    public function contact(){

        return $this->hasOne(Contact::class);

    }

    public function teacher(){

        return $this->belongsTo(Teacher::class);

    }

    public function activities(){
        return $this->belongsToMany(Activity::class);
    }
}
