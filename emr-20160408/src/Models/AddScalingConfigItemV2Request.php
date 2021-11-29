<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class AddScalingConfigItemV2Request extends Model
{
    /**
     * @var string
     */
    public $configItemInformation;

    /**
     * @var string
     */
    public $configItemType;

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
    public $scalingGroupBizId;
    protected $_name = [
        'configItemInformation' => 'ConfigItemInformation',
        'configItemType'        => 'ConfigItemType',
        'regionId'              => 'RegionId',
        'resourceGroupId'       => 'ResourceGroupId',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'scalingGroupBizId'     => 'ScalingGroupBizId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configItemInformation) {
            $res['ConfigItemInformation'] = $this->configItemInformation;
        }
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
        if (null !== $this->scalingGroupBizId) {
            $res['ScalingGroupBizId'] = $this->scalingGroupBizId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddScalingConfigItemV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigItemInformation'])) {
            $model->configItemInformation = $map['ConfigItemInformation'];
        }
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
        if (isset($map['ScalingGroupBizId'])) {
            $model->scalingGroupBizId = $map['ScalingGroupBizId'];
        }

        return $model;
    }
}
