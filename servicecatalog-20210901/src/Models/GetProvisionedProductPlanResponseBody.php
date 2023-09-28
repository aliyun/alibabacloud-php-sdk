<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProvisionedProductPlanResponseBody\planDetail;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProvisionedProductPlanResponseBody\productDetail;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProvisionedProductPlanResponseBody\productVersionDetail;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProvisionedProductPlanResponseBody\resourceChanges;
use AlibabaCloud\Tea\Model;

class GetProvisionedProductPlanResponseBody extends Model
{
    /**
     * @description The details of the plan.
     *
     * @var planDetail
     */
    public $planDetail;

    /**
     * @description The details of the product.
     *
     * @var productDetail
     */
    public $productDetail;

    /**
     * @description The details of the product version.
     *
     * @var productVersionDetail
     */
    public $productVersionDetail;

    /**
     * @description The ID of the request.
     *
     * @example 0FEEF92D-4052-5202-87D0-3D8EC16F81BF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array that consists of the resources to be changed in the plan.
     *
     * @var resourceChanges[]
     */
    public $resourceChanges;
    protected $_name = [
        'planDetail'           => 'PlanDetail',
        'productDetail'        => 'ProductDetail',
        'productVersionDetail' => 'ProductVersionDetail',
        'requestId'            => 'RequestId',
        'resourceChanges'      => 'ResourceChanges',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->planDetail) {
            $res['PlanDetail'] = null !== $this->planDetail ? $this->planDetail->toMap() : null;
        }
        if (null !== $this->productDetail) {
            $res['ProductDetail'] = null !== $this->productDetail ? $this->productDetail->toMap() : null;
        }
        if (null !== $this->productVersionDetail) {
            $res['ProductVersionDetail'] = null !== $this->productVersionDetail ? $this->productVersionDetail->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceChanges) {
            $res['ResourceChanges'] = [];
            if (null !== $this->resourceChanges && \is_array($this->resourceChanges)) {
                $n = 0;
                foreach ($this->resourceChanges as $item) {
                    $res['ResourceChanges'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProvisionedProductPlanResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlanDetail'])) {
            $model->planDetail = planDetail::fromMap($map['PlanDetail']);
        }
        if (isset($map['ProductDetail'])) {
            $model->productDetail = productDetail::fromMap($map['ProductDetail']);
        }
        if (isset($map['ProductVersionDetail'])) {
            $model->productVersionDetail = productVersionDetail::fromMap($map['ProductVersionDetail']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceChanges'])) {
            if (!empty($map['ResourceChanges'])) {
                $model->resourceChanges = [];
                $n                      = 0;
                foreach ($map['ResourceChanges'] as $item) {
                    $model->resourceChanges[$n++] = null !== $item ? resourceChanges::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
