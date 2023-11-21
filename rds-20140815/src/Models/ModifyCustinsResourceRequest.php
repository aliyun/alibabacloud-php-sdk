<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyCustinsResourceRequest extends Model
{
    /**
     * @description The deadline for the modification.
     *
     * @example 2022-12-31 23:59:06
     *
     * @var string
     */
    public $adjustDeadline;

    /**
     * @description The instance ID. You can call the [DescribeDBInstances](~~26232~~) operation to query the instance ID.
     *
     * @example rm-j5ekvfeengm******
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The increase rate in percentage.
     *
     * @example 10
     *
     * @var string
     */
    public $increaseRatio;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The resource type.
     *
     * @example Memory
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The original value. This parameter must be specified when the **ResourceType** parameter is set to **instance**.
     *
     * @example 200
     *
     * @var string
     */
    public $restoreOriginalSpecification;

    /**
     * @description The target value. This parameter is available only if you set the ScalingRuleType parameter to TargetTrackingScalingRule or PredictiveScalingRule. The value must be greater than 0 and can contain up to three decimal places.
     *
     * @example 3000
     *
     * @var int
     */
    public $targetValue;
    protected $_name = [
        'adjustDeadline'               => 'AdjustDeadline',
        'DBInstanceId'                 => 'DBInstanceId',
        'increaseRatio'                => 'IncreaseRatio',
        'resourceOwnerId'              => 'ResourceOwnerId',
        'resourceType'                 => 'ResourceType',
        'restoreOriginalSpecification' => 'RestoreOriginalSpecification',
        'targetValue'                  => 'TargetValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adjustDeadline) {
            $res['AdjustDeadline'] = $this->adjustDeadline;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->increaseRatio) {
            $res['IncreaseRatio'] = $this->increaseRatio;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->restoreOriginalSpecification) {
            $res['RestoreOriginalSpecification'] = $this->restoreOriginalSpecification;
        }
        if (null !== $this->targetValue) {
            $res['TargetValue'] = $this->targetValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCustinsResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdjustDeadline'])) {
            $model->adjustDeadline = $map['AdjustDeadline'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['IncreaseRatio'])) {
            $model->increaseRatio = $map['IncreaseRatio'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['RestoreOriginalSpecification'])) {
            $model->restoreOriginalSpecification = $map['RestoreOriginalSpecification'];
        }
        if (isset($map['TargetValue'])) {
            $model->targetValue = $map['TargetValue'];
        }

        return $model;
    }
}
