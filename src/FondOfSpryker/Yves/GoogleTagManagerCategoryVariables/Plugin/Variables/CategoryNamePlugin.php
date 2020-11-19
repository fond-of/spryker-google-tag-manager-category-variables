<?php

namespace FondOfSpryker\Yves\GoogleTagManagerCategoryVariables\Plugin\Variables;

use FondOfSpryker\Yves\GoogleTagManagerCore\Dependency\GoogleTagManagerExtensionPluginInterface;
use Spryker\Yves\Kernel\AbstractPlugin;

class CategoryNamePlugin extends AbstractPlugin implements GoogleTagManagerExtensionPluginInterface
{
    public const PARAM_CATEGORY = 'category';
    public const PARAM_CATEGORY_NAME = 'name';

    public const FIELD_CATEGORY_NAME = 'name';

    /**
     * @param string $page
     * @param array $params
     *
     * @return array
     */
    public function addVariable(string $page, array $params): array
    {
        if ($this->isParamsValid($params) === false) {
            return [];
        }

        return [
            static::FIELD_CATEGORY_NAME => $params[static::PARAM_CATEGORY][static::PARAM_CATEGORY_NAME],
        ];
    }

    /**
     * @param array $params
     *
     * @return bool
     */
    protected function isParamsValid(array $params): bool
    {
        if (!isset($params[static::PARAM_CATEGORY])) {
            return false;
        }

        if (!isset($params[static::PARAM_CATEGORY][static::PARAM_CATEGORY_NAME])) {
            return false;
        }

        return true;
    }
}
