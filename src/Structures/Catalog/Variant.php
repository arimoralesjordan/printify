<?php

namespace Printify\Structures\Catalog;

use Printify\Structures\BaseStructure;

class Variant extends BaseStructure
{
    public function fill(object $attribute): void
    {
        $this->attributes = [
            'id' => (int) $attribute->id,
            'title' => $attribute->title,
            'options' => $attribute->options,
            'placeholders' => $attribute->placeholders //https://developers.printify.com/#catalog-placeholder-properties
        ];
    }
}
