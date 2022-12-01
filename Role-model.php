<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_name'
    ];

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->role_name;
    }

    public function setName($value){
        $this->role_name = $value;
        return $this->save();
    }
    

}
?>