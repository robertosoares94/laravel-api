<?php
namespace App\Support\Database;

use Faker\Generator;
use Illuminate\Database\Eloquent\Factory;

abstract class ModelFactory
{
    /**
     * @var Factory
     */
    protected $factory;
    /**
     * @var mixed
     */
    protected $faker;
    /**
     * @var string
     */
    protected $model;

    /**
     * ModelFactory constructor.
     */
    public function __construct()
    {
        $this->factory = app()->make(Factory::class);
        $this->faker = app()->make(Generator::class);
    }

    public function define()
    {
        $this->factory->define($this->model,function (){
            return $this->fields();
        });
    }
    abstract protected function fields();
}