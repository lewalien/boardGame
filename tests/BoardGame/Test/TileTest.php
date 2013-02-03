<?php

namespace BoardGame\Test;

use \BoardGame\Tile;

class TileTest extends \PHPUnit_Framework_TestCase
{

    public function testFirst()
    {
        $tile = new Tile();

        $this->assertTrue($tile->hasMoves());
    }

}
