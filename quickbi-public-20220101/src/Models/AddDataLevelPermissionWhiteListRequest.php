<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class AddDataLevelPermissionWhiteListRequest extends Model
{
    /**
     * @description The ID of the training dataset that you want to remove from the specified custom linguistic model.
     *
     * This parameter is required.
     * @example 7c7223ae-***-3c744528014b
     *
     * @var string
     */
    public $cubeId;

    /**
     * @description Operation Type: You can set this parameter to one of the following values.
     *
     *   ADD: Add a whitelist
     *   DELETE: deletes a whitelist.
     *
     * @example ADD
     *
     * @var string
     */
    public $operateType;

    /**
     * @description The type of row-level permissions.
     *
     *   ROW_LEVEL: row-level permissions,
     *   COLUMN_LEVEL: column-level permissions
     *
     * @example ROW_LEVEL
     *
     * @var string
     */
    public $ruleType;

    /**
     * @example 43342***435,1553a****41231
     *
     * @var string
     */
    public $targetIds;

    /**
     * @description Modify the type of the whitelist:
     *
     *   1: user
     *   2: user group
     *
     * @example 1
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'cubeId'      => 'CubeId',
        'operateType' => 'OperateType',
        'ruleType'    => 'RuleType',
        'targetIds'   => 'TargetIds',
        'targetType'  => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cubeId) {
            $res['CubeId'] = $this->cubeId;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->targetIds) {
            $res['TargetIds'] = $this->targetIds;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDataLevelPermissionWhiteListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CubeId'])) {
            $model->cubeId = $map['CubeId'];
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['TargetIds'])) {
            $model->targetIds = $map['TargetIds'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
