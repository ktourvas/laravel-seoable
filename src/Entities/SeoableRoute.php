<?php

namespace tgp\LaravelSeoable\Entities;

use Illuminate\Database\Eloquent\Model;

class SeoableRoute extends Model {

    use Seoable;

    protected $fillable = [ 'domain', 'route' ];

}
