<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\SubmitOperationTaskRequest\operationTaskInstances;
use AlibabaCloud\SDK\Sas\V20181203\Models\SubmitOperationTaskRequest\repairTempParam;
use AlibabaCloud\Tea\Model;

class SubmitOperationTaskRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 132
     *
     * @var int
     */
    public $checkId;

    /**
     * @example CHECK_ID
     *
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
     * @description This parameter is required.
     *
     * @example REPAIR
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->dimensionType) {
            $res['DimensionType'] = $this->dimensionType;
        }
        if (null !== $this->operationTaskInstances) {
            $res['OperationTaskInstances'] = [];
            if (null !== $this->operationTaskInstances && \is_array($this->operationTaskInstances)) {
                $n = 0;
                foreach ($this->operationTaskInstances as $item) {
                    $res['OperationTaskInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->relationKey) {
            $res['RelationKey'] = $this->relationKey;
        }
        if (null !== $this->repairTempParam) {
            $res['RepairTempParam'] = [];
            if (null !== $this->repairTempParam && \is_array($this->repairTempParam)) {
                $n = 0;
                foreach ($this->repairTempParam as $item) {
                    $res['RepairTempParam'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitOperationTaskRequest
     */
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
                $n                             = 0;
                foreach ($map['OperationTaskInstances'] as $item) {
                    $model->operationTaskInstances[$n++] = null !== $item ? operationTaskInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RelationKey'])) {
            $model->relationKey = $map['RelationKey'];
        }
        if (isset($map['RepairTempParam'])) {
            if (!empty($map['RepairTempParam'])) {
                $model->repairTempParam = [];
                $n                      = 0;
                foreach ($map['RepairTempParam'] as $item) {
                    $model->repairTempParam[$n++] = null !== $item ? repairTempParam::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
