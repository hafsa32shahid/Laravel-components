<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class form extends Component
{
   public $fields = [];
   public $submit;
    public function __construct($fields = [], $submit = 'Submit')
    {
        $this->fields = $fields;
        $this->submit = $submit;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form');
    }
}
