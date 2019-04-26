<?php
namespace Domlip\MigrationsGenerator;

use Mockery;
use PHPUnit_Framework_TestCase;

class MigrationsGeneratorTest extends PHPUnit_Framework_TestCase {

  public function tearDown()
  {
    Mockery::close();
  }

  /**
  * @test
  */
  public function registers_migrations_generator()
  {
    
  }
}
