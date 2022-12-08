<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CountryResource\Pages;
use App\Filament\Resources\CountryResource\RelationManagers;
use App\Filament\Roles;
use Filament\Resources\Forms\Components;
use Filament\Resources\Forms\Components\TextInput;
//use Filament\Resources\Forms\Components\TextColumn;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Columns;
use Filament\Resources\Tables\Filter;
use Filament\Resources\Tables\Table;
use Filament\Forms\Components\Card;

class CountryResource extends Resource
{
    public static $icon = 'heroicon-o-collection';

    public static function form(Form $form)
    {
        return $form
            ->schema([
                TextInput::make('country_code'),
                TextInput::make('name')
            ]);

//        ->schema([
//        Card::make()
//            ->schema([
//                TextInput::make('country_code'),
//                TextInput::make('name')
//            ])
//
//    ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
//                TextColumn::make('id')->sortable(),
//                TextColumn::make('country_code')->sortable()->searchable(),
//                TextColumn::make('name')->sortable()->searchable(),
//                TextColumn::make('created_at')->dateTime()
            ])
            ->filters([
                //
            ]);
    }


    public static function relations()
    {
        return [
            //
        ];
    }

    public static function routes()
    {
        return [
            Pages\ListCountries::routeTo('/', 'index'),
            Pages\CreateCountry::routeTo('/create', 'create'),
            Pages\EditCountry::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
