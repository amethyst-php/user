<?php

namespace Railken\LaraOre\User\Tests;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Railken\LaraCommandTest\Helper;
use Railken\LaraCommandTest\GeneratorCommandTestable;
use Illuminate\Support\Facades\Artisan;

abstract class BaseTest extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            \Railken\LaraOre\UserServiceProvider::class,
        ];
    }

    /**
     * Setup the test environment.
     */
    public function setUp()
    {
        $dotenv = new \Dotenv\Dotenv(__DIR__.'/..', '.env');
        $dotenv->load();


        parent::setUp();
        
        $this->artisan('migrate:fresh');
        $this->artisan('vendor:publish', ['--provider' => 'Railken\LaraOre\UserServiceProvider', '--force' => true]);
        $this->artisan('lara-ore:user:install');
        $this->artisan('migrate');
    }
}
