<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProvisionedProductPlanResponseBody\planDetail\approvalDetail\todoTaskActivities;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProvisionedProductPlanResponseBody\planDetail\approvalDetail\todoTaskActivities\tasks\operator;

class tasks extends Model
{
    /**
     * @var operator
     */
    public $operator;
    protected $_name = [
        'operator' => 'Operator',
    ];

    public function validate()
    {
        if (null !== $this->operator) {
            $this->operator->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operator) {
            $res['Operator'] = null !== $this->operator ? $this->operator->toArray($noStream) : $this->operator;
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
        if (isset($map['Operator'])) {
            $model->operator = operator::fromMap($map['Operator']);
        }

        return $model;
    }
}
