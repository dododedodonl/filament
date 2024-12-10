@props([
    'logoutItem' => null,
])

<x-filament::dropdown.list.item
    :action="$logoutItem?->getUrl() ?? filament()->getLogoutUrl()"
    :color="$logoutItem?->getColor()"
    :icon="$logoutItem?->getIcon() ?? \Filament\Support\Facades\FilamentIcon::resolve('panels::user-menu.logout-button') ?? 'heroicon-m-arrow-left-on-rectangle'"
    method="post"
    tag="form"
>
    {{ $logoutItem?->getLabel() ?? __('filament-panels::layout.actions.logout.label') }}
</x-filament::dropdown.list.item>
