<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProvisionedProductPlanResponseBody\planDetail;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProvisionedProductPlanResponseBody\planDetail\approvalDetail\operationRecords;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProvisionedProductPlanResponseBody\planDetail\approvalDetail\todoTaskActivities;
use AlibabaCloud\Tea\Model;

class approvalDetail extends Model
{
    /**
     * @description An array that consists of operations that are performed by the operator.
     *
     * @var operationRecords[]
     */
    public $operationRecords;

    /**
     * @description An array that consists of operations that are being performed by the plan.
     *
     * @var todoTaskActivities[]
     */
    public $todoTaskActivities;
    protected $_name = [
        'operationRecords'   => 'OperationRecords',
        'todoTaskActivities' => 'TodoTaskActivities',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operationRecords) {
            $res['OperationRecords'] = [];
            if (null !== $this->operationRecords && \is_array($this->operationRecords)) {
                $n = 0;
                foreach ($this->operationRecords as $item) {
                    $res['OperationRecords'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->todoTaskActivities) {
            $res['TodoTaskActivities'] = [];
            if (null !== $this->todoTaskActivities && \is_array($this->todoTaskActivities)) {
                $n = 0;
                foreach ($this->todoTaskActivities as $item) {
                    $res['TodoTaskActivities'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return approvalDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperationRecords'])) {
            if (!empty($map['OperationRecords'])) {
                $model->operationRecords = [];
                $n                       = 0;
                foreach ($map['OperationRecords'] as $item) {
                    $model->operationRecords[$n++] = null !== $item ? operationRecords::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TodoTaskActivities'])) {
            if (!empty($map['TodoTaskActivities'])) {
                $model->todoTaskActivities = [];
                $n                         = 0;
                foreach ($map['TodoTaskActivities'] as $item) {
                    $model->todoTaskActivities[$n++] = null !== $item ? todoTaskActivities::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
