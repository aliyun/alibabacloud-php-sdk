<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\SubmitOperationTaskRequest\operationTaskInstances;
use AlibabaCloud\SDK\Sas\V20181203\Models\SubmitOperationTaskRequest\repairTempParam;
use AlibabaCloud\Tea\Model;

class SubmitOperationTaskRequest extends Model
{
    /**
     * @description The ID of the check item.
     *
     * >  You can call the [ListCheckResult](~~ListCheckResult~~) operation to obtain the ID of the check item.
     *
     * This parameter is required.
     *
     * @example 132
     *
     * @var int
     */
    public $checkId;

    /**
     * @description The dimension of the task that you want to submit. Valid values:
     *
     *   Instance dimension: INSTANCE
     *   Check item dimension: CHECK_ID
     *
     * @example CHECK_ID
     *
     * @var string
     */
    public $dimensionType;

    /**
     * @description The asset information required to submit the tasks for instances.
     *
     * @var operationTaskInstances[]
     */
    public $operationTaskInstances;

    /**
     * @description The key linked to cross-page selections during task submission.
     *
     * >  You can call the [CreateAssetSelectionConfig](~~CreateAssetSelectionConfig~~) operation to query the associated key from the BusinessType field.
     *
     * @example CSPM_OPERATION_RELATION_KEY_173***
     *
     * @var string
     */
    public $relationKey;

    /**
     * @description The temporary parameters required for the repair task.
     *
     * @var repairTempParam[]
     */
    public $repairTempParam;

    /**
     * @description The type of the task that you want to submit. Valid values:
     *
     *   Repair task: REPAIR
     *   Rollback task: ROLLBACK
     *
     * This parameter is required.
     *
     * @example REPAIR
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'checkId' => 'CheckId',
        'dimensionType' => 'DimensionType',
        'operationTaskInstances' => 'OperationTaskInstances',
        'relationKey' => 'RelationKey',
        'repairTempParam' => 'RepairTempParam',
        'type' => 'Type',
    ];

    public function validate() {}

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
                $n = 0;
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
                $n = 0;
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
