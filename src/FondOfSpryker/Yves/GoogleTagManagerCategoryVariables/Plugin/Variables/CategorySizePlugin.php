<?php

namespace FondOfSpryker\Yves\GoogleTagManagerCategoryVariables\Plugin\Variables;

use FondOfSpryker\Yves\GoogleTagManagerCore\Dependency\GoogleTagManagerExtensionPluginInterface;
use Generated\Shared\Transfer\GoogleTagManagerCategoryProductTransfer;
use Spryker\Yves\Kernel\AbstractPlugin;

/**
 * @method \FondOfSpryker\Yves\GoogleTagManagerCategoryVariables\GoogleTagManagerCategoryVariablesFactory getFactory()
 */
class CategorySizePlugin extends AbstractPlugin implements GoogleTagManagerExtensionPluginInterface
{
    public const PARAM_PRODUCT = 'products';

    public const FIELD_CATEGORY_SIZE = 'categorySize';

    /**
     * @param string $page
     * @param array $params
     *
     * @return array
     */
    public function addVariable(string $page, array $params): array
    {
        if (!isset($params[static::PARAM_PRODUCT])) {
            return [];
        }

        return [
            static::FIELD_CATEGORY_SIZE => count($params[static::PARAM_PRODUCT])
        ];
    }
}
