<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SuntingResource\Pages;
use App\Filament\Resources\SuntingResource\RelationManagers;
use App\Models\Sunting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SuntingResource extends Resource
{
    protected static ?string $model = Sunting::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';
    public static function getNavigationBadge(): ?string {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('posisi')
                    ->placeholder('Admin')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama_agency')
                    ->placeholder('Volunteeria')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('lokasi')
                    ->placeholder('Karawang')
                    ->required()
                    ->maxLength(255),
                Forms\Components\RichEditor::make('kriteria')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('jobdesk')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('benefit')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('link_form')
                    ->placeholder('gform')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kuota')
                    ->placeholder('0')
                    ->numeric()
                    ->required(),
                    // ->step(100),
                Forms\Components\TextInput::make('telepon')
                    ->tel()
                    ->placeholder('081312345678')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->placeholder('volunteeria@info.com')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('instagram')
                    ->required()
                    ->placeholder('@volunteeria')
                    ->maxLength(255),
                Forms\Components\TextInput::make('facebook')
                    ->placeholder('Optional')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('posisi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_agency')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lokasi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kriteria')
                    ->searchable()
                    ->limit(20)
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('jobdesk')
                    ->searchable()
                    ->limit(20)
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('benefit')
                    ->searchable()
                    ->limit(20)
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('link_form')
                    ->searchable()
                    ->limit(10)
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('kuota')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telepon')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->limit(20),
                Tables\Columns\TextColumn::make('instagram')
                    ->searchable(),
                Tables\Columns\TextColumn::make('facebook')
                    ->searchable(),
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
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListSuntings::route('/'),
            // 'create' => Pages\CreateSunting::route('/create'),
            // 'edit' => Pages\EditSunting::route('/{record}/edit'),
        ];
    }
}
