<?php

namespace FondOfSpryker\Yves\GoogleTagManagerCategoryVariables\Plugin\Variables;

use Codeception\Test\Unit;

class CategoryNamePluginTest extends Unit
{
    /**
     * @return void
     */
    public function testAddVariable(): void
    {
        $plugin = new CategoryNamePlugin();
        $result = $plugin->addVariable('pageType', [
            CategoryNamePlugin::PARAM_CATEGORY => [
                CategoryNamePlugin::FIELD_CATEGORY_NAME => 'category name',
            ],
        ]);

        $this->assertIsArray($result);
        $this->arrayHasKey(CategoryNamePlugin::PARAM_CATEGORY_NAME);
    }
}
