<?php declare(strict_types=1);
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
namespace Anan\User\ViewModel\Adminhtml;

use Magento\Backend\Model\UrlInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Login implements ArgumentInterface
{
    /**
     * @var \Magento\Backend\Model\UrlInterface
     */
    private $url;

    /**
     * Constructor
     * @param \Magento\Backend\Model\UrlInterface $url
     */
    public function __construct(
        UrlInterface $url
    ) {
        $this->url = $url;
    }

    /**
     * Get login url
     * @return string
     */
    public function getLoginUrl(): string
    {
        return $this->url->getUrl('anan_user/login/login', [UrlInterface::SECRET_KEY_PARAM_NAME => '']);
    }
}