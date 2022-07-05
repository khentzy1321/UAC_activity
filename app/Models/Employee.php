<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','date_of_hire', 'employee_name','address','cell_no','email_add'];

    public function user() {
        return $this->belongsTo('App\Models\User');

    }
    public function isEditable(){
        $employ = request()->route('employ');
        
       return auth()->user()->role=='editor' || auth()->user()->id==$employ->user_id;
    }
    public function isDeletable(){
        $employ = request()->route('employ');
        
       return auth()->user()->role=='editor' || auth()->user()->id==$employ->user_id;
    }
}
