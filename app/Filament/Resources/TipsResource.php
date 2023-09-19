<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Tips;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\TipsResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TipsResource\RelationManagers;

class TipsResource extends Resource
{
    protected static ?string $model = Tips::class;

    protected static ?string $navigationIcon = 'heroicon-o-light-bulb';
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('foto')
                    ->required()->preserveFilenames()->image()->disk('public')->directory('Img'),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->placeholder('Cara melakukan interview kerja ataupun volunteer')
                    ->maxLength(255),
                Forms\Components\TextInput::make('link')
                    ->required()
                    ->placeholder('https://volunteeria.com')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('foto'),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable()
                    ->limit(30),
                Tables\Columns\TextColumn::make('link')
                    ->searchable()
                    ->view('filament.link')
                    ->limit(20),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()->after(
                    function(Tips $record){
                        if($record->foto){
                            Storage::delete('public/'.$record->foto);
                        }
                    }
                ),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->after(function (Collection $records) {
                        foreach ($records as $key => $value) {
                            if ($value->foto) {
                                Storage::delete('public/' . $value->foto);
                            }
                        }
                    }),
                ]),
            ])
            ->emptyStateActions([
                // Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTips::route('/'),
            // 'create' => Pages\CreateTips::route('/create'),
            // 'edit' => Pages\EditTips::route('/{record}/edit'),
        ];
    }
}
