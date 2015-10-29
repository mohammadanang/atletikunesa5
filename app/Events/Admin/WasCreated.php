<?php

namespace App\Events\Admin;

use App\Admin;

class WasCreated
{
    public $admin;

    /**
     * Create a new event instance
     *
     * @param Admin $admin
     */
    public function __construct(Admin $admin)
    {
        $this->admin = $admin;
    }
}