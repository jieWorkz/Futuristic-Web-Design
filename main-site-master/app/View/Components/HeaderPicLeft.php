<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HeaderPicLeft extends Component
{
	public $title;
	public $sub;
	public $img;
	/**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($img, $title, $sub)
    {
		$this->img = $img;
		$this->title = $title;
		$this->sub = $sub;
	}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header-pic-left');
    }
}
