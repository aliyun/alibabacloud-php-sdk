<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class DescribeScalingConfigItemV2Request extends Model
{
    /**
     * @example SCALING_RULE
     *
     * @var string
     */
    public $configItemType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-acfmv6jutt6****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @example SRB-0F2A154CFD4D****
     *
     * @var string
     */
    public $scalingConfigItemId;

    /**
     * @example SGB-8E52011DD26C****
     *
     * @var string
     */
    public $scalingGroupBizId;
    protected $_name = [
        'configItemType'      => 'ConfigItemType',
        'regionId'            => 'RegionId',
        'resourceGroupId'     => 'ResourceGroupId',
        'resourceOwnerId'     => 'ResourceOwnerId',
        'scalingConfigItemId' => 'ScalingConfigItemId',
        'scalingGroupBizId'   => 'ScalingGroupBizId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configItemType) {
            $res['ConfigItemType'] = $this->configItemType;
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
        if (null !== $this->scalingConfigItemId) {
            $res['ScalingConfigItemId'] = $this->scalingConfigItemId;
        }
        if (null !== $this->scalingGroupBizId) {
            $res['ScalingGroupBizId'] = $this->scalingGroupBizId;
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
        if (isset($map['ConfigItemType'])) {
            $model->configItemType = $map['ConfigItemType'];
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
        if (isset($map['ScalingConfigItemId'])) {
            $model->scalingConfigItemId = $map['ScalingConfigItemId'];
        }
        if (isset($map['ScalingGroupBizId'])) {
            $model->scalingGroupBizId = $map['ScalingGroupBizId'];
        }

        return $model;
    }
}
