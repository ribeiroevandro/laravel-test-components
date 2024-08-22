<?php

namespace App\Support\Blade;

class BladeComponentPrefix
{
    public function __construct(private ?string $prefix = null)
    {
        $this->prefix = config('vega.prefix');
    }

    /**
     * Add component prefix.
     */
    public function add(string $component): string
    {
        if (blank($this->prefix) || (bool) $this->prefix === false) {
            return $component;
        }

        return str($component)->start($this->prefix)->value();
    }

    /**
     * Remove component prefix.
     */
    public function remove(string $component): string
    {
        if (blank($this->prefix) || (bool) $this->prefix === false) {
            return $component;
        }

        return str($component)->remove($this->prefix)->value();
    }
}
