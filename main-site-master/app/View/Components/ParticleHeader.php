<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ParticleHeader extends Component
{
	public $img;
	public $sub;
	public $btnText;

	/**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($img, $sub, $btnText)
    {
        $this->img = $img;
		$this->sub = $sub;
		$this->btnText = $btnText;
	}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.particle-header');
    }
}
