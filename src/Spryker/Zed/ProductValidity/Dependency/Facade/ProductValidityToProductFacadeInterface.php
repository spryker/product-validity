<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductValidity\Dependency\Facade;

interface ProductValidityToProductFacadeInterface
{
    public function activateProductConcrete(int $idProductConcrete): void;

    public function deactivateProductConcrete(int $idProductConcrete): void;
}
