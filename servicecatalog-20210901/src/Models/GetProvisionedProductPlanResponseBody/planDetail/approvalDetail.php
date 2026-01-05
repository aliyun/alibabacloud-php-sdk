<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProvisionedProductPlanResponseBody\planDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProvisionedProductPlanResponseBody\planDetail\approvalDetail\operationRecords;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProvisionedProductPlanResponseBody\planDetail\approvalDetail\todoTaskActivities;

class approvalDetail extends Model
{
    /**
     * @var operationRecords[]
     */
    public $operationRecords;

    /**
     * @var todoTaskActivities[]
     */
    public $todoTaskActivities;
    protected $_name = [
        'operationRecords' => 'OperationRecords',
        'todoTaskActivities' => 'TodoTaskActivities',
    ];

    public function validate()
    {
        if (\is_array($this->operationRecords)) {
            Model::validateArray($this->operationRecords);
        }
        if (\is_array($this->todoTaskActivities)) {
            Model::validateArray($this->todoTaskActivities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operationRecords) {
            if (\is_array($this->operationRecords)) {
                $res['OperationRecords'] = [];
                $n1 = 0;
                foreach ($this->operationRecords as $item1) {
                    $res['OperationRecords'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->todoTaskActivities) {
            if (\is_array($this->todoTaskActivities)) {
                $res['TodoTaskActivities'] = [];
                $n1 = 0;
                foreach ($this->todoTaskActivities as $item1) {
                    $res['TodoTaskActivities'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['OperationRecords'])) {
            if (!empty($map['OperationRecords'])) {
                $model->operationRecords = [];
                $n1 = 0;
                foreach ($map['OperationRecords'] as $item1) {
                    $model->operationRecords[$n1] = operationRecords::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TodoTaskActivities'])) {
            if (!empty($map['TodoTaskActivities'])) {
                $model->todoTaskActivities = [];
                $n1 = 0;
                foreach ($map['TodoTaskActivities'] as $item1) {
                    $model->todoTaskActivities[$n1] = todoTaskActivities::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
