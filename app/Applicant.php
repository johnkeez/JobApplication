<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $guarded = ['id'];
    public function job()
    {
        return $this->belongsTo('App\Job', 'job_id');
    }
}
