<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductValidity\Communication\Plugin\AclMerchantPortal;

use Generated\Shared\Transfer\AclEntityMetadataConfigTransfer;
use Generated\Shared\Transfer\AclEntityMetadataTransfer;
use Generated\Shared\Transfer\AclEntityParentMetadataTransfer;
use Spryker\Zed\AclMerchantPortalExtension\Dependency\Plugin\AclEntityConfigurationExpanderPluginInterface;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;

/**
 * @method \Spryker\Zed\ProductValidity\Business\ProductValidityFacadeInterface getFacade()
 * @method \Spryker\Zed\ProductValidity\ProductValidityConfig getConfig()
 * @method \Spryker\Zed\ProductValidity\Persistence\ProductValidityQueryContainerInterface getQueryContainer()
 */
class ProductValidityAclEntityConfigurationExpanderPlugin extends AbstractPlugin implements AclEntityConfigurationExpanderPluginInterface
{
    /**
     * {@inheritDoc}
     * - Expands provided `AclEntityMetadataConfig` transfer object with product validity composite data.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\AclEntityMetadataConfigTransfer $aclEntityMetadataConfigTransfer
     *
     * @return \Generated\Shared\Transfer\AclEntityMetadataConfigTransfer
     */
    public function expand(AclEntityMetadataConfigTransfer $aclEntityMetadataConfigTransfer): AclEntityMetadataConfigTransfer
    {
        $aclEntityMetadataConfigTransfer
            ->getAclEntityMetadataCollectionOrFail()
            ->addAclEntityMetadata(
                'Orm\Zed\ProductValidity\Persistence\SpyProductValidity',
                (new AclEntityMetadataTransfer())
                    ->setEntityName('Orm\Zed\ProductValidity\Persistence\SpyProductValidity')
                    ->setIsSubEntity(true)
                    ->setParent((new AclEntityParentMetadataTransfer())->setEntityName('Orm\Zed\Product\Persistence\SpyProduct')),
            );

        return $aclEntityMetadataConfigTransfer;
    }
}
