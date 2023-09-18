<?php

namespace App\Filament\Resources\TipsResource\Pages;

use App\Models\Tips;
use Filament\Actions;
use Illuminate\Support\Facades\Storage;
use App\Filament\Resources\TipsResource;
use Filament\Resources\Pages\EditRecord;

class EditTips extends EditRecord
{
    protected static string $resource = TipsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function(Tips $record){
                    if($record->foto){
                        Storage::delete('public/'.$record->foto);
                    }
                }
            ),
        ];
    }
}
