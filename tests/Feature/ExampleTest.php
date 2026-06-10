<?php

declare(strict_types=1);

namespace Sylament\Forms\Tests\Feature;

use Sylament\Forms\Tests\Fixtures\Twig\Components\ArticleForm;

it('can update state', function (): void {
    $articleForm = $this->createLiveComponent(ArticleForm::class);

    $articleForm->set('data.title', 'hello');
    $articleForm->set('data.title', 'how are you');

    expect($articleForm->component()->data['slug'])
        ->toBe('hello');
});
