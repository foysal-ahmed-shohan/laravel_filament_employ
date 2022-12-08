<?php

namespace App\Filament\Resources\CountryResource\Pages;

use App\Filament\Resources\CountryResource;
use Filament\Resources\Pages\ListRecords;

class ListCountries extends ListRecords
{
    public static $resource = CountryResource::class;
}
