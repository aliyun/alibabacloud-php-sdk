<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class RunScalingActionV2Request extends Model
{
    /**
     * @var string
     */
    public $actionParam;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $scalingActionType;

    /**
     * @var string
     */
    public $scalingGroupBizId;
    protected $_name = [
        'actionParam'       => 'ActionParam',
        'regionId'          => 'RegionId',
        'resourceGroupId'   => 'ResourceGroupId',
        'resourceOwnerId'   => 'ResourceOwnerId',
        'scalingActionType' => 'ScalingActionType',
        'scalingGroupBizId' => 'ScalingGroupBizId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionParam) {
            $res['ActionParam'] = $this->actionParam;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->scalingActionType) {
            $res['ScalingActionType'] = $this->scalingActionType;
        }
        if (null !== $this->scalingGroupBizId) {
            $res['ScalingGroupBizId'] = $this->scalingGroupBizId;
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
        if (isset($map['ActionParam'])) {
            $model->actionParam = $map['ActionParam'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ScalingActionType'])) {
            $model->scalingActionType = $map['ScalingActionType'];
        }
        if (isset($map['ScalingGroupBizId'])) {
            $model->scalingGroupBizId = $map['ScalingGroupBizId'];
        }

        return $model;
    }
}
