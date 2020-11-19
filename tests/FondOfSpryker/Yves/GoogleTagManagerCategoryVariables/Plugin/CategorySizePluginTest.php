<?php

namespace FondOfSpryker\Yves\GoogleTagManagerCategoryVariables\Plugin\Variables;

use Codeception\Test\Unit;

class CategorySizePluginTest extends Unit
{
    /**
     * @return void
     */
    public function testAddVariable(): void
    {
        $plugin = new CategorySizePlugin();
        $result = $plugin->addVariable('pageType', [
            CategorySizePlugin::PARAM_PRODUCTS => ['prod1', 'prod2', 'prod3'],
        ]);

        $this->assertIsArray($result);
        $this->arrayHasKey(CategorySizePlugin::FIELD_CATEGORY_SIZE);
    }
}
