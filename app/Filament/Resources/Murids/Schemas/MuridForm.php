<?php

namespace App\Filament\Resources\Murids\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms;

class MuridForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Forms\Components\TextInput::make('nama')
                ->required()
                ->maxLength(255),

            Forms\Components\Textarea::make('alamat')
                ->required(),

            Forms\Components\Radio::make('jenis_kelamin')
                ->options([
                    'L' => 'Laki-laki',
                    'P' => 'Perempuan',
                ])
                ->required(),

            Forms\Components\DatePicker::make('tanggal_lahir')
                ->required(),
        ]);
    }
}
