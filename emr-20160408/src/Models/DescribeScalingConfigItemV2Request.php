<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class DescribeScalingConfigItemV2Request extends Model
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
    public $scalingGroupBizId;

    /**
     * @var string
     */
    public $configItemType;

    /**
     * @var string
     */
    public $scalingConfigItemId;
    protected $_name = [
        'resourceOwnerId'     => 'ResourceOwnerId',
        'regionId'            => 'RegionId',
        'resourceGroupId'     => 'ResourceGroupId',
        'scalingGroupBizId'   => 'ScalingGroupBizId',
        'configItemType'      => 'ConfigItemType',
        'scalingConfigItemId' => 'ScalingConfigItemId',
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
        if (null !== $this->scalingGroupBizId) {
            $res['ScalingGroupBizId'] = $this->scalingGroupBizId;
        }
        if (null !== $this->configItemType) {
            $res['ConfigItemType'] = $this->configItemType;
        }
        if (null !== $this->scalingConfigItemId) {
            $res['ScalingConfigItemId'] = $this->scalingConfigItemId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScalingConfigItemV2Request
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
        if (isset($map['ScalingGroupBizId'])) {
            $model->scalingGroupBizId = $map['ScalingGroupBizId'];
        }
        if (isset($map['ConfigItemType'])) {
            $model->configItemType = $map['ConfigItemType'];
        }
        if (isset($map['ScalingConfigItemId'])) {
            $model->scalingConfigItemId = $map['ScalingConfigItemId'];
        }

        return $model;
    }
}
