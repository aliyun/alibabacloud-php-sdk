<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProvisionedProductPlanResponseBody\planDetail;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProvisionedProductPlanResponseBody\productDetail;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProvisionedProductPlanResponseBody\productVersionDetail;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProvisionedProductPlanResponseBody\resourceChanges;

class GetProvisionedProductPlanResponseBody extends Model
{
    /**
     * @var planDetail
     */
    public $planDetail;

    /**
     * @var productDetail
     */
    public $productDetail;

    /**
     * @var productVersionDetail
     */
    public $productVersionDetail;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourceChanges[]
     */
    public $resourceChanges;
    protected $_name = [
        'planDetail' => 'PlanDetail',
        'productDetail' => 'ProductDetail',
        'productVersionDetail' => 'ProductVersionDetail',
        'requestId' => 'RequestId',
        'resourceChanges' => 'ResourceChanges',
    ];

    public function validate()
    {
        if (null !== $this->planDetail) {
            $this->planDetail->validate();
        }
        if (null !== $this->productDetail) {
            $this->productDetail->validate();
        }
        if (null !== $this->productVersionDetail) {
            $this->productVersionDetail->validate();
        }
        if (\is_array($this->resourceChanges)) {
            Model::validateArray($this->resourceChanges);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->planDetail) {
            $res['PlanDetail'] = null !== $this->planDetail ? $this->planDetail->toArray($noStream) : $this->planDetail;
        }

        if (null !== $this->productDetail) {
            $res['ProductDetail'] = null !== $this->productDetail ? $this->productDetail->toArray($noStream) : $this->productDetail;
        }

        if (null !== $this->productVersionDetail) {
            $res['ProductVersionDetail'] = null !== $this->productVersionDetail ? $this->productVersionDetail->toArray($noStream) : $this->productVersionDetail;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceChanges) {
            if (\is_array($this->resourceChanges)) {
                $res['ResourceChanges'] = [];
                $n1 = 0;
                foreach ($this->resourceChanges as $item1) {
                    $res['ResourceChanges'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['ResourceChanges'] as $item1) {
                    $model->resourceChanges[$n1] = resourceChanges::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
