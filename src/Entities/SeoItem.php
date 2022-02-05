<?php

namespace tgp\LaravelSeoable\Entities;

use Illuminate\Database\Eloquent\Model;

class SeoItem extends Model {

    public static $types = [ 1 => 'title', 2 => 'description', 3 => 'keywords' ];

    protected $fillable = [ 'payload' ];

}
