<?php

namespace App\Filament\Widgets;

use app\Models\report;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class RecentReport extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make(label:'Total Reports', value: report::count())
        ];
    }
}
