<?php

class Builder
{
    public array $properties;
    public function make($name): Builder
    {
        $this->properties['name'] = $name;
        return $this;
    }

    public function color($color): Builder
    {
        $this->properties['color'] = $color;
        return $this;
    }

    public function wheels($wheels): Builder
    {
        $this->properties['wheels'] = $wheels;
        return $this;
    }

    public function get(): string
    {
        $result = '';
        foreach($this->properties as $key => $value) {
            $result .= $key . ': ' . $value . PHP_EOL;
        }

        return $result;
    }
}