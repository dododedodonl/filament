<?php

namespace Filament\Tests\Fixtures\Resources\Shop\Products;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use Filament\Tests\Fixtures\Models\Product;
use Filament\Tests\Fixtures\Resources\Shop\Products\Pages\CreateProduct;
use Filament\Tests\Fixtures\Resources\Shop\Products\Pages\EditProduct;
use Filament\Tests\Fixtures\Resources\Shop\Products\Pages\ListProducts;
use Filament\Tests\Fixtures\Resources\Shop\Products\Pages\ViewProduct;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationGroup = 'Shop';

    protected static string | BackedEnum | null $navigationIcon = Heroicon::OutlinedShoppingBag;

    public static function getPages(): array
    {
        return [
            'index' => ListProducts::route('/'),
            'create' => CreateProduct::route('/create'),
            'view' => ViewProduct::route('/{record}'),
            'edit' => EditProduct::route('/{record}/edit'),
        ];
    }
}
