<?php

namespace App\Jobs\Admin;

use App\Admin;
use App\Events\Admin\WasCreated;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Events\Dispatcher;
use Illuminate\Http\Request;

class CreateUser implements SelfHandling
{
    /**
     * Laravel request instance
     *
     * @var Request
     */
    protected $request;

    /**
     * Create a new job instance
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Execute the job
     *
     * @param Dispatcher $events
     */
    public function handle(Dispatcher $events)
    {
        $data = $this->request->except('_token');
        $data['activation_code'] = str_random(60) . $this->request->input('email');

        $admin = Admin::create($data);

        if($admin instanceof Admin) {
            $events->fire(new WasCreated($admin));
        }
    }
}