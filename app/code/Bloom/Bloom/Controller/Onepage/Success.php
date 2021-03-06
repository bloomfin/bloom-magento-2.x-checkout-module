<?php
namespace Bloom\Bloom\Controller\Onepage;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;

class Success extends \Magento\Framework\App\Action\Action
{

    /**
     * @var \Magento\Checkout\Helper\Cart
     */
    protected $cartHelper;
    /**
     * @var \Bloom\Bloom\Model\Fullpay\CheckoutFactory
     */
    protected $checkoutFactory;

    /**
     * Success constructor.
     * @param Context $context
     * @param \Magento\Checkout\Helper\Cart $cartHelper
     * @param \Bloom\Bloom\Model\Fullpay\CheckoutFactory $checkoutFactory
     */
    public function __construct(
      Context $context,
      \Magento\Checkout\Helper\Cart $cartHelper,
      \Bloom\Bloom\Model\Fullpay\CheckoutFactory $checkoutFactory
    ) {
        parent::__construct($context);

        $this->cartHelper = $cartHelper;
        $this->checkoutFactory = $checkoutFactory;
    }

    /**
     * Dispatch request
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        $checkout = $this->checkoutFactory->create();
        $checkout->placeOrder();
        $this->_redirect('checkout/onepage/success');
    }
}
