<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\UpdateProvisionedProductPlanRequest\parameters;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\UpdateProvisionedProductPlanRequest\tags;
use AlibabaCloud\Tea\Model;

class UpdateProvisionedProductPlanRequest extends Model
{
    /**
     * @description The description of the plan.
     *
     * @example Create an ECS instance.
     *
     * @var string
     */
    public $description;

    /**
     * @description An array that consists of the parameters in the template.
     *
     * > If you specify Parameters, you must specify ParameterKey and ParameterValue.
     * @var parameters[]
     */
    public $parameters;

    /**
     * @description The ID of the plan.
     *
     * @example plan-bp1jvmdk2k****
     *
     * @var string
     */
    public $planId;

    /**
     * @description The ID of the product portfolio.
     *
     * > If the default launch option exists, you do not need to specify PortfolioId. If the default launch option does not exist, you must specify PortfolioId. For more information about how to obtain the value of PortfolioId, see [ListLaunchOptions](~~ListLaunchOptions~~).
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
     * @example pv-bp15e79d26****
     *
     * @var string
     */
    public $productVersionId;

    /**
     * @description An array that consists of custom tags.
     *
     * >
     *   If you specify Tags, you must specify Tags.N.Key and Tags.N.Value.
     *   The tag of a stack is propagated to each resource that supports the tag feature in the stack.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'description'      => 'Description',
        'parameters'       => 'Parameters',
        'planId'           => 'PlanId',
        'portfolioId'      => 'PortfolioId',
        'productId'        => 'ProductId',
        'productVersionId' => 'ProductVersionId',
        'tags'             => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = [];
            if (null !== $this->parameters && \is_array($this->parameters)) {
                $n = 0;
                foreach ($this->parameters as $item) {
                    $res['Parameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
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
     * @return UpdateProvisionedProductPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n                 = 0;
                foreach ($map['Parameters'] as $item) {
                    $model->parameters[$n++] = null !== $item ? parameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
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
