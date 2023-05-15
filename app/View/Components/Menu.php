<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Storage;

class Menu extends Component
{
    /**
     * Menu items
     * @var array
     */
    public $items;

    /**
     * @param array $items
     * @return array
     */
    public function __construct($items)
    {
        $this->items = $items;
    }

    /**
     * @return array
     */
    public function render(): View|Closure|array
    {
        return view('components.menu');
    }

    public static function getCategories() {
        return collect(Storage::json('public/categories.json'));
    }
}
