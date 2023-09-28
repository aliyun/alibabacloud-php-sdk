<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProvisionedProductPlanResponseBody\planDetail\approvalDetail\todoTaskActivities;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProvisionedProductPlanResponseBody\planDetail\approvalDetail\todoTaskActivities\tasks\operator;
use AlibabaCloud\Tea\Model;

class tasks extends Model
{
    /**
     * @description The operator who performs operations on the plan.
     *
     * @var operator
     */
    public $operator;
    protected $_name = [
        'operator' => 'Operator',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operator) {
            $res['Operator'] = null !== $this->operator ? $this->operator->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Operator'])) {
            $model->operator = operator::fromMap($map['Operator']);
        }

        return $model;
    }
}
