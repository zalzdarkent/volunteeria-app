<?php

namespace App\Filament\Resources\TipsResource\Pages;

use App\Filament\Resources\TipsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTips extends ListRecords
{
    protected static string $resource = TipsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
