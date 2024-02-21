<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListScalingConfigItemV2ResponseBody\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @example {\"spotStrategy\":\"NoSpot\",\"spotPriceLimits\":[],\"instanceTypeList\":[],\"sysDiskCategory\":\"cloud_essd\",\"sysDiskSize\":{\"value\":40.0,\"unit\":\"GIGABYTE\"},\"dataDiskCategory\":\"cloud_essd\",\"dataDiskSize\":{\"value\":40.0,\"unit\":\"GIGABYTE\"},\"dataDiskCount\":4,\"scalingMaxSize\":10,\"scalingMinSize\":0,\"defaultCoolDownTime\":0,\"scalingTimeoutPolice\":{\"timeoutPolicy\":\"ROLLBACK\"},\"nodeOfflineMode\":\"DEFAULT\",\"nodeOfflineModeParam\":{\"timeoutMs\":0},\"triggerMode\":\"Scheduled\",\"multiAvailablePolicy\":\"PRIORITY\",\"multiAvailablePolicyParam\":{\"onDemandBaseCapacity\":0,\"onDemandPercentageAboveBaseCapacity\":0,\"spotInstanceRemedy\":false,\"spotInstancePools\":0},\"configItemType\":\"SCALING_STRATEGY\",\"scalingConfigBizId\":\"SCB-5B74B3834D9A446F\"}
     *
     * @var string
     */
    public $configItemInformation;

    /**
     * @example SCALING_STRATEGY
     *
     * @var string
     */
    public $configItemType;

    /**
     * @example SSB-B1AC1532C218****
     *
     * @var string
     */
    public $scalingConfigItemBizId;

    /**
     * @example SGB-84314D112C67****
     *
     * @var string
     */
    public $scalingGroupBizId;
    protected $_name = [
        'configItemInformation'  => 'ConfigItemInformation',
        'configItemType'         => 'ConfigItemType',
        'scalingConfigItemBizId' => 'ScalingConfigItemBizId',
        'scalingGroupBizId'      => 'ScalingGroupBizId',
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
        if (null !== $this->scalingConfigItemBizId) {
            $res['ScalingConfigItemBizId'] = $this->scalingConfigItemBizId;
        }
        if (null !== $this->scalingGroupBizId) {
            $res['ScalingGroupBizId'] = $this->scalingGroupBizId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
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
        if (isset($map['ScalingConfigItemBizId'])) {
            $model->scalingConfigItemBizId = $map['ScalingConfigItemBizId'];
        }
        if (isset($map['ScalingGroupBizId'])) {
            $model->scalingGroupBizId = $map['ScalingGroupBizId'];
        }

        return $model;
    }
}
