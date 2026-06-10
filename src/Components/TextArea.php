<?php

declare(strict_types=1);

namespace Sylament\Forms\Components;

use Closure;

class TextArea extends Field
{
    protected string|Closure|null $template = '@SylamentForms/components/TextArea.html.twig';
}
