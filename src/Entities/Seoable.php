<?php

namespace ktourvas\LaravelSeoable\Entities;

trait Seoable {

    public function seo()
    {
        return $this->morphToMany(SeoItem::class, 'seoable')->withPivot('contextual_type_id');
    }

    public function getseoTitleattribute() {
        return $this->seo()->wherePivot('contextual_type_id', 1)->first();
    }

    public function getseoDescriptionattribute() {
        return $this->seo()->wherePivot('contextual_type_id', 2)->first();
    }

}