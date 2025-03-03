<?php

declare(strict_types=1);

namespace LaravelLang\StarterKits\Plugins;

use LaravelLang\Publisher\Plugins\Plugin;

class Livewire extends Plugin
{
    protected ?string $vendor = 'laravel/livewire-starter-kit';

    public function files(): array
    {
        return [
            'livewire/main/livewire.json' => '{locale}.json',
        ];
    }
}
