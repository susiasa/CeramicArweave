<?php
/**
 * Tests for CeramicArweave
 */

use PHPUnit\Framework\TestCase;
use Ceramicarweave\Ceramicarweave;

class CeramicarweaveTest extends TestCase {
    private Ceramicarweave $instance;

    protected function setUp(): void {
        $this->instance = new Ceramicarweave(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Ceramicarweave::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
