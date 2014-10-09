<?php
// src/Worldstores/OrderBundle/DataFixtures/ORM/OrdersFixtures.php
namespace Oras\PlaygroundBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Hautelook\AliceBundle\Alice\DataFixtureLoader;
use Nelmio\Alice\Fixtures;

/**
 * Data fixtures class
 */
class SetsFixtures extends DataFixtureLoader
{
    /**
     * {@inheritDoc}
     */
    protected function getFixtures()
    {
        return  array( __DIR__ . '/sets.yml',);
    }
}