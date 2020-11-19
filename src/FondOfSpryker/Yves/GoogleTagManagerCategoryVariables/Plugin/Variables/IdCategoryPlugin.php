<?php

namespace FondOfSpryker\Yves\GoogleTagManagerCategoryVariables\Plugin\Variables;

use FondOfSpryker\Yves\GoogleTagManagerCore\Dependency\GoogleTagManagerExtensionPluginInterface;
use Spryker\Yves\Kernel\AbstractPlugin;

class IdCategoryPlugin extends AbstractPlugin implements GoogleTagManagerExtensionPluginInterface
{
    public const PARAM_CATEGORY = 'category';
    public const PARAM_ID_CATEGORY = 'id_category';

    public const FIELD_ID_CATEGORY = 'idCategory';

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
            static::FIELD_ID_CATEGORY => $params[static::PARAM_CATEGORY][static::PARAM_ID_CATEGORY],
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

        if (!isset($params[static::PARAM_CATEGORY][static::PARAM_ID_CATEGORY])) {
            return false;
        }

        return true;
    }
}
