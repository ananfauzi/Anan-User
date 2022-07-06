<?php
/**
 * Anan User, Magento 2.4 custom admin user module supported aws cognito
 * php version 8.1
 * 
 * @category Admin User
 * @package  Aws Cognito
 * @author   Anan Fauzi <mr.ananfauzi@gmail.com>
 * @license  MIT license <https://opensource.org/licenses/MIT>
 * @link     https://github.com/ananfauzi
 */
namespace Anan\User\Test\Unit\Model\Cognito;

class TestAuth extends \PHPUnit\Framework\TestCase
{
    /**
     * Set up params
     */
    protected function setUp() {
        $this->username = '';
        $this->password = '';
        $this->objectManager = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);
        $this->model = $this->objectManager->getObject("\Anan\User\Model\Cognito\Auth");
    }

    /**
     * Test function login
     */
    public function testLogin()
    {
        $result = $this->model->login($this->username, $this->password);
        $this->assertTrue(\is_bool($result));
    }

    /**
     * Test function register
     */
    public function testCreate()
    {
        $result = $this->model->create($this->username, $this->password);
        $this->assertTrue(\is_bool($result));
    }
}