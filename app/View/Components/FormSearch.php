<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormSearch extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $method = '/search',
        public string $action = 'GET'
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form-search');
    }

    public function index()
    {
        return 'Salam aalykom';
    }
}
