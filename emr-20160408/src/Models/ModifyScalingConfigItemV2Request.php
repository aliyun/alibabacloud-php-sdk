<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class ModifyScalingConfigItemV2Request extends Model
{
    /**
     * @example SCB-232423A****
     *
     * @var string
     */
    public $configItemBizId;

    /**
     * @var string
     */
    public $configItemInformation;

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
     * @example SGB-1232423AB****
     *
     * @var string
     */
    public $scalingGroupBizId;
    protected $_name = [
        'configItemBizId'       => 'ConfigItemBizId',
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
        if (null !== $this->configItemBizId) {
            $res['ConfigItemBizId'] = $this->configItemBizId;
        }
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
     * @return ModifyScalingConfigItemV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigItemBizId'])) {
            $model->configItemBizId = $map['ConfigItemBizId'];
        }
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
