<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Tea\Model;

class ExecuteProvisionedProductPlanRequest extends Model
{
    /**
     * @description The ID of the plan.
     *
     * @example plan-bp1jvmdk2k****
     *
     * @var string
     */
    public $planId;
    protected $_name = [
        'planId' => 'PlanId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteProvisionedProductPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }

        return $model;
    }
}
