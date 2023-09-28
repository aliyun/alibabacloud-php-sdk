<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\UpdateProvisionedProductRequest\parameters;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\UpdateProvisionedProductRequest\tags;
use AlibabaCloud\Tea\Model;

class UpdateProvisionedProductRequest extends Model
{
    /**
     * @description The input parameters of the template.
     *
     * > - If the values of the ProductVersionId and Parameters parameters are not changed, you are not allowed to update the information about the product instance.
     * @var parameters[]
     */
    public $parameters;

    /**
     * @description The ID of the product portfolio.
     *
     * > The PortfolioId parameter is not required if the default launch option exists. The PortfolioId parameter is required if the default launch option does not exist. For more information about how to obtain the value of the PortfolioId parameter, see [ListLaunchOptions](~~ListLaunchOptions~~).
     * @example port-bp1yt7582g****
     *
     * @var string
     */
    public $portfolioId;

    /**
     * @description The ID of the product.
     *
     * @example prod-bp18r7q127****
     *
     * @var string
     */
    public $productId;

    /**
     * @description The ID of the product version.
     *
     * > If the values of the ProductVersionId and Parameters parameters are not changed, the information about the product instance cannot be updated.
     * @example pv-bp15e79d26****
     *
     * @var string
     */
    public $productVersionId;

    /**
     * @description The ID of the product instance.
     *
     * @example pp-bp1ddg1n2a****
     *
     * @var string
     */
    public $provisionedProductId;

    /**
     * @description The input custom tags.
     *
     * > - The tag is propagated to each stack resource that supports the tag feature.
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'parameters'           => 'Parameters',
        'portfolioId'          => 'PortfolioId',
        'productId'            => 'ProductId',
        'productVersionId'     => 'ProductVersionId',
        'provisionedProductId' => 'ProvisionedProductId',
        'tags'                 => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameters) {
            $res['Parameters'] = [];
            if (null !== $this->parameters && \is_array($this->parameters)) {
                $n = 0;
                foreach ($this->parameters as $item) {
                    $res['Parameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->portfolioId) {
            $res['PortfolioId'] = $this->portfolioId;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->productVersionId) {
            $res['ProductVersionId'] = $this->productVersionId;
        }
        if (null !== $this->provisionedProductId) {
            $res['ProvisionedProductId'] = $this->provisionedProductId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProvisionedProductRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n                 = 0;
                foreach ($map['Parameters'] as $item) {
                    $model->parameters[$n++] = null !== $item ? parameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PortfolioId'])) {
            $model->portfolioId = $map['PortfolioId'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['ProductVersionId'])) {
            $model->productVersionId = $map['ProductVersionId'];
        }
        if (isset($map['ProvisionedProductId'])) {
            $model->provisionedProductId = $map['ProvisionedProductId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
