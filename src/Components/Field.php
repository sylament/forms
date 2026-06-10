<?php

declare(strict_types=1);

namespace Sylament\Forms\Components;

use Sylament\Schemas\Components\Component;
use Sylament\Schemas\Components\Concerns\HasLabel;

abstract class Field extends Component
{
    use HasLabel;

    public static function make(?string $name = null): static
    {
        return parent::make()
            ->name($name)
            ->statePath($name);
    }
}
