<?php

namespace Easydot\NestedCategory;


use Easydot\NestedCategory\Commands\NestedCategoryInstallCommand;
use Easydot\NestedCategory\Commands\NestedCategoryRebuildCommand;
use Easydot\NestedCategory\Commands\NestedCategoryUpgradeCommand;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                NestedCategoryInstallCommand::class,
                NestedCategoryUpgradeCommand::class,
                NestedCategoryRebuildCommand::class,
            ]);
        }
    }
}
