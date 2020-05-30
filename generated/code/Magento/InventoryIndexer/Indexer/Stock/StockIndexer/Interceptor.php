<?php
namespace Magento\InventoryIndexer\Indexer\Stock\StockIndexer;

/**
 * Interceptor class for @see \Magento\InventoryIndexer\Indexer\Stock\StockIndexer
 */
class Interceptor extends \Magento\InventoryIndexer\Indexer\Stock\StockIndexer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\InventoryIndexer\Indexer\Stock\GetAllStockIds $getAllStockIds, \Magento\InventoryMultiDimensionalIndexerApi\Model\IndexStructureInterface $indexStructureHandler, \Magento\InventoryMultiDimensionalIndexerApi\Model\IndexHandlerInterface $indexHandler, \Magento\InventoryMultiDimensionalIndexerApi\Model\IndexNameBuilder $indexNameBuilder, \Magento\InventoryIndexer\Indexer\Stock\IndexDataProviderByStockId $indexDataProviderByStockId, \Magento\InventoryMultiDimensionalIndexerApi\Model\IndexTableSwitcherInterface $indexTableSwitcher, \Magento\InventoryCatalogApi\Api\DefaultStockProviderInterface $defaultStockProvider)
    {
        $this->___init();
        parent::__construct($getAllStockIds, $indexStructureHandler, $indexHandler, $indexNameBuilder, $indexDataProviderByStockId, $indexTableSwitcher, $defaultStockProvider);
    }

    /**
     * {@inheritdoc}
     */
    public function executeFull()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeFull');
        if (!$pluginInfo) {
            return parent::executeFull();
        } else {
            return $this->___callPlugins('executeFull', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function executeRow(int $stockId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeRow');
        if (!$pluginInfo) {
            return parent::executeRow($stockId);
        } else {
            return $this->___callPlugins('executeRow', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function executeList(array $stockIds)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeList');
        if (!$pluginInfo) {
            return parent::executeList($stockIds);
        } else {
            return $this->___callPlugins('executeList', func_get_args(), $pluginInfo);
        }
    }
}
