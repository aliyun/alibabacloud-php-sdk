<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class DescribeScalingGroupInstanceV2Request extends Model
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
    public $hostGroupBizId;
    protected $_name = [
        'resourceOwnerId'   => 'ResourceOwnerId',
        'regionId'          => 'RegionId',
        'resourceGroupId'   => 'ResourceGroupId',
        'scalingGroupBizId' => 'ScalingGroupBizId',
        'hostGroupBizId'    => 'HostGroupBizId',
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
        if (null !== $this->hostGroupBizId) {
            $res['HostGroupBizId'] = $this->hostGroupBizId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScalingGroupInstanceV2Request
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
        if (isset($map['HostGroupBizId'])) {
            $model->hostGroupBizId = $map['HostGroupBizId'];
        }

        return $model;
    }
}
