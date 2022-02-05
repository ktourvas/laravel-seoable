<?php

namespace tgp\LaravelSeoable\Entities;

trait Seoable {

    public function seo()
    {
        return $this->morphToMany(SeoItem::class, 'seoable')->withPivot('lang', 'contextual_type_id');
    }

    public function getseoTitleAttribute()
    {
        return $this->seo()->wherePivot('contextual_type_id', 1)->first();
    }

    public function getseoDescriptionAttribute()
    {
        return $this->seo()->wherePivot('contextual_type_id', 2)->first();
    }

    public function getseoKeywordsAttribute()
    {
        return $this->seo()->wherePivot('contextual_type_id', 2)->first();
    }

}