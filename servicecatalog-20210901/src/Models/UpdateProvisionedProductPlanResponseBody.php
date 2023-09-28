<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Tea\Model;

class UpdateProvisionedProductPlanResponseBody extends Model
{
    /**
     * @description The ID of the plan.
     *
     * @example plan-bp1jvmdk2k****
     *
     * @var string
     */
    public $planId;

    /**
     * @description The ID of the product instance.
     *
     * @example pp-bp1ddg1n2a****
     *
     * @var string
     */
    public $provisionedProductId;

    /**
     * @description The ID of the request.
     *
     * @example 0FEEF92D-4052-5202-87D0-3D8EC16F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'planId'               => 'PlanId',
        'provisionedProductId' => 'ProvisionedProductId',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->provisionedProductId) {
            $res['ProvisionedProductId'] = $this->provisionedProductId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProvisionedProductPlanResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }
        if (isset($map['ProvisionedProductId'])) {
            $model->provisionedProductId = $map['ProvisionedProductId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
