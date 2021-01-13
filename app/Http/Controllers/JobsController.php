<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class JobsController extends Controller
{
    public function index()
    {
        $jobs = Job::orderBy('created_at', 'desc')->get();
        return \view('jobs',[

                'jobs' => $jobs,
        ]);
    }
    //To fetch all jobs

    public function find_job($id)
    {
        $job = Job::where('id', $id)->first();
        return view('job',[
                'job' => $job,
        ]);
    }
    //to fetch job with specific id

    
    public function applicants($job_id)
    {
        $job = Job::where('id', 'job_id')->first();
        $applicants = $job->applicants;

        return view('applicants',[
            'job' => $job,
            'applicants' => $applicants

        ]);
    }
}
