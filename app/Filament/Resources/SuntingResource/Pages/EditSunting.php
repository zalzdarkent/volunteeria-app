<?php

namespace App\Filament\Resources\SuntingResource\Pages;

use App\Filament\Resources\SuntingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSunting extends EditRecord
{
    protected static string $resource = SuntingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
