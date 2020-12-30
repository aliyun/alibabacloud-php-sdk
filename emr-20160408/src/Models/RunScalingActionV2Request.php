<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class RunScalingActionV2Request extends Model
{
    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $scalingActionType;

    /**
     * @var string
     */
    public $scalingGroupBizId;

    /**
     * @var string
     */
    public $actionParam;
    protected $_name = [
        'resourceOwnerId'   => 'ResourceOwnerId',
        'regionId'          => 'RegionId',
        'resourceGroupId'   => 'ResourceGroupId',
        'scalingActionType' => 'ScalingActionType',
        'scalingGroupBizId' => 'ScalingGroupBizId',
        'actionParam'       => 'ActionParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->scalingActionType) {
            $res['ScalingActionType'] = $this->scalingActionType;
        }
        if (null !== $this->scalingGroupBizId) {
            $res['ScalingGroupBizId'] = $this->scalingGroupBizId;
        }
        if (null !== $this->actionParam) {
            $res['ActionParam'] = $this->actionParam;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunScalingActionV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ScalingActionType'])) {
            $model->scalingActionType = $map['ScalingActionType'];
        }
        if (isset($map['ScalingGroupBizId'])) {
            $model->scalingGroupBizId = $map['ScalingGroupBizId'];
        }
        if (isset($map['ActionParam'])) {
            $model->actionParam = $map['ActionParam'];
        }

        return $model;
    }
}
