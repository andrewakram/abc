<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    protected $primaryKey = 'url_id';
    protected $table = 'urls';
    protected $fillable = ['url_name','url_status'];
}
