<?php namespace HireMe\Entities;

class Category extends \Eloquent {
	protected $fillable = [];

    public function candidates()
    {
        return $this->hasMany('HireMe\Entities\Candidate');
    }
}