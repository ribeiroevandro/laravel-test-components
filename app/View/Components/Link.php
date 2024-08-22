<?php

namespace App\View\Components;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class Link extends BaseComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    public function blade(): View
    {
        return view('components.link');
    }
}
