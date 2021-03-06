<?php
namespace Bloom\Bloom\Block;

use Magento\Framework\View\Element\Template;

class Onepage extends Template
{
    /**
     * @var \Magento\Framework\Registry
     */
    private $registry;

    public function __construct(
      Template\Context $context, array $data = [],
      \Magento\Framework\Registry $registry
    ) {
        parent::__construct($context, $data);
        $this->registry = $registry;
    }

    /**
     * @return string
     */
    public function getHtmlSnippet()
    {
        return $this->registry->registry('html');
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->registry->registry('token');
    }
}
