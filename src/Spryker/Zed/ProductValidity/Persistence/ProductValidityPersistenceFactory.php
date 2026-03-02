<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductValidity\Persistence;

use Orm\Zed\ProductValidity\Persistence\SpyProductValidityQuery;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;
use Spryker\Zed\ProductValidity\Persistence\Mapper\ProductValidityMapper;

/**
 * @method \Spryker\Zed\ProductValidity\Persistence\ProductValidityQueryContainerInterface getQueryContainer()
 * @method \Spryker\Zed\ProductValidity\Persistence\ProductValidityRepositoryInterface getRepository()
 * @method \Spryker\Zed\ProductValidity\ProductValidityConfig getConfig()
 */
class ProductValidityPersistenceFactory extends AbstractPersistenceFactory
{
    public function createProductValidityQuery(): SpyProductValidityQuery
    {
        return SpyProductValidityQuery::create();
    }

    public function createProductValidityMapper(): ProductValidityMapper
    {
        return new ProductValidityMapper();
    }
}
