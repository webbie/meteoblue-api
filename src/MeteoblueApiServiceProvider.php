<?php

namespace Webbie\MeteoblueApi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Webbie\MeteoblueApi\Commands\MeteoblueApiCommand;

class MeteoblueApiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('meteoblue-api')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_meteoblue_api_table')
            ->hasCommand(MeteoblueApiCommand::class);
    }
}
