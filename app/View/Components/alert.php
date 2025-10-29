<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use PhpParser\Node\Expr\Cast\Bool_;

class alert extends Component
{

    public $message ;
    public $type ;

    protected $types = ['danger','success','info'];
    public $role ;
    public $dismissable ;


    /**
     * Create a new component instance.
     */
    public function __construct(string $message = "there is no message",
    string $type = "success",string $role = "alert" ,bool $dismissable = false )
    {
        $this->message = $message;
        $this->type = $this->declare_type($type);
        $this->role = $role;
        $this->dismissable = $dismissable;

    }

    public function declare_type(string $type) {
        return in_array($type,$this->types) ? $type : "success";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
