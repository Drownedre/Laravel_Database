<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mdl_buku extends Model
{
    protected $table = "buku";
    protected $primary_Key = "id";
    public $timestamps = false;
    public $fillable = ['id','judul','pengarang'];
}
