<?php
namespace App\Domains\Users\Providers;

use App\Domains\Users\Database\Migrations\CreatePasswordResetsTable;
use App\Domains\Users\Database\Migrations\CreateUsersTable;
use Illuminate\Support\ServiceProvider;
use Migrator\MigratorTrait as HasMigrations;

class DomainServiceProvider extends ServiceProvider
{
    use HasMigrations;
    public function register()
    {
        $this->registerMigrations();
    }
    protected function registerMigrations()
    {
        $this->migrations([
            CreateUsersTable::class,
            CreatePasswordResetsTable::class
        ]);
    }
}