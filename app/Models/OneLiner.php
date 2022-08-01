<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OneLiner extends Model
{
    use HasFactory;

    protected $table = 'one_liners';

    public $primarykey = 'id';
    public $timestamp = true;

    public $fillable = ['one_liner'];
    
}
