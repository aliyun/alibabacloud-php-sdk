<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\SubmitOperationTaskRequest\operationTaskInstances;
use AlibabaCloud\SDK\Sas\V20181203\Models\SubmitOperationTaskRequest\repairTempParam;

class SubmitOperationTaskRequest extends Model
{
    /**
     * @var int
     */
    public $checkId;
    /**
     * @var string
     */
    public $dimensionType;
    /**
     * @var operationTaskInstances[]
     */
    public $operationTaskInstances;
    /**
     * @var string
     */
    public $relationKey;
    /**
     * @var repairTempParam[]
     */
    public $repairTempParam;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'checkId'                => 'CheckId',
        'dimensionType'          => 'DimensionType',
        'operationTaskInstances' => 'OperationTaskInstances',
        'relationKey'            => 'RelationKey',
        'repairTempParam'        => 'RepairTempParam',
        'type'                   => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->operationTaskInstances)) {
            Model::validateArray($this->operationTaskInstances);
        }
        if (\is_array($this->repairTempParam)) {
            Model::validateArray($this->repairTempParam);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }

        if (null !== $this->dimensionType) {
            $res['DimensionType'] = $this->dimensionType;
        }

        if (null !== $this->operationTaskInstances) {
            if (\is_array($this->operationTaskInstances)) {
                $res['OperationTaskInstances'] = [];
                $n1                            = 0;
                foreach ($this->operationTaskInstances as $item1) {
                    $res['OperationTaskInstances'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->relationKey) {
            $res['RelationKey'] = $this->relationKey;
        }

        if (null !== $this->repairTempParam) {
            if (\is_array($this->repairTempParam)) {
                $res['RepairTempParam'] = [];
                $n1                     = 0;
                foreach ($this->repairTempParam as $item1) {
                    $res['RepairTempParam'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }

        if (isset($map['DimensionType'])) {
            $model->dimensionType = $map['DimensionType'];
        }

        if (isset($map['OperationTaskInstances'])) {
            if (!empty($map['OperationTaskInstances'])) {
                $model->operationTaskInstances = [];
                $n1                            = 0;
                foreach ($map['OperationTaskInstances'] as $item1) {
                    $model->operationTaskInstances[$n1++] = operationTaskInstances::fromMap($item1);
                }
            }
        }

        if (isset($map['RelationKey'])) {
            $model->relationKey = $map['RelationKey'];
        }

        if (isset($map['RepairTempParam'])) {
            if (!empty($map['RepairTempParam'])) {
                $model->repairTempParam = [];
                $n1                     = 0;
                foreach ($map['RepairTempParam'] as $item1) {
                    $model->repairTempParam[$n1++] = repairTempParam::fromMap($item1);
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
