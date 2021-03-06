<?php
namespace Bloom\Bloom\Plugin;

class Link
{

    /**
     * @var \Magento\Framework\UrlInterface
     */
    private $urlInterface;

    /**
     * Link constructor.
     * @param \Magento\Framework\UrlInterface $urlInterface
     */
    public function __construct(\Magento\Framework\UrlInterface $urlInterface)
    {
        $this->urlInterface = $urlInterface;
    }

    public function afterGetCheckoutUrl()
    {
       return $this->urlInterface->getUrl('bloom/onepage');
    }

}
