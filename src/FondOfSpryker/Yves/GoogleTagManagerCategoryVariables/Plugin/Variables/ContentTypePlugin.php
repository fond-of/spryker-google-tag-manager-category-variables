<?php

namespace FondOfSpryker\Yves\GoogleTagManagerCategoryVariables\Plugin\Variables;

use FondOfSpryker\Yves\GoogleTagManagerCore\Dependency\GoogleTagManagerExtensionPluginInterface;
use Spryker\Yves\Kernel\AbstractPlugin;

class ContentTypePlugin extends AbstractPlugin implements GoogleTagManagerExtensionPluginInterface
{
    public const PARAM_CONTENT_TYPE = 'contentType';

    public const FIELD_CONTENT_TYPE = 'contentType';

    /**
     * @param string $page
     * @param array $params
     *
     * @return array
     */
    public function addVariable(string $page, array $params): array
    {
        if (!isset($params[static::PARAM_CONTENT_TYPE])) {
            return [];
        }

        return [
            static::FIELD_CONTENT_TYPE => $params[static::PARAM_CONTENT_TYPE],
        ];
    }
}
