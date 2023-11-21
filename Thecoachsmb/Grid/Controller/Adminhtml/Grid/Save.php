<?php

namespace Thecoachsmb\Grid\Controller\Adminhtml\Grid;

class Save extends \Magento\Backend\App\Action
{
    /**
     * @var \Thecoachsmb\Grid\Model\GridFactory
     */
    var $gridFactory;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Thecoachsmb\Grid\Model\GridFactory $gridFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Thecoachsmb\Grid\Model\GridFactory $gridFactory
    ) {
        parent::__construct($context);
        $this->gridFactory = $gridFactory;
    }

    /**
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function execute()
    {
        $data = $this->getRequest()->getPostValue();
        if (!$data) {
            $this->_redirect('thecoachsmb/grid/addrow');
            return;
        }
        try {
            $rowData = $this->gridFactory->create();
            $rowData->setData($data);
            if (isset($data['id'])) {
                $rowData->setEntityId($data['id']);
            }
            $rowData->save();
            $this->messageManager->addSuccess(__('Row data has been successfully saved.'));
        } catch (\Exception $e) {
            $this->messageManager->addError(__($e->getMessage()));
        }
        $this->_redirect('thecoachsmb/grid/index');
    }

    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Thecoachsmb_Grid::save');
    }
}