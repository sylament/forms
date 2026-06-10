<?php

declare(strict_types=1);

namespace Sylament\Forms\Components;

use Closure;

class TextInput extends Field
{
    protected string|Closure|null $template = '@SylamentForms/components/TextInput.html.twig';
}
