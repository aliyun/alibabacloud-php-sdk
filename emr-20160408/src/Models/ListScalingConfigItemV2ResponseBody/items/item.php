<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListScalingConfigItemV2ResponseBody\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var string
     */
    public $configItemType;

    /**
     * @var string
     */
    public $scalingConfigItemBizId;

    /**
     * @var string
     */
    public $scalingGroupBizId;

    /**
     * @var string
     */
    public $configItemInformation;
    protected $_name = [
        'configItemType'         => 'ConfigItemType',
        'scalingConfigItemBizId' => 'ScalingConfigItemBizId',
        'scalingGroupBizId'      => 'ScalingGroupBizId',
        'configItemInformation'  => 'ConfigItemInformation',
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
        if (null !== $this->scalingConfigItemBizId) {
            $res['ScalingConfigItemBizId'] = $this->scalingConfigItemBizId;
        }
        if (null !== $this->scalingGroupBizId) {
            $res['ScalingGroupBizId'] = $this->scalingGroupBizId;
        }
        if (null !== $this->configItemInformation) {
            $res['ConfigItemInformation'] = $this->configItemInformation;
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
        if (isset($map['ConfigItemType'])) {
            $model->configItemType = $map['ConfigItemType'];
        }
        if (isset($map['ScalingConfigItemBizId'])) {
            $model->scalingConfigItemBizId = $map['ScalingConfigItemBizId'];
        }
        if (isset($map['ScalingGroupBizId'])) {
            $model->scalingGroupBizId = $map['ScalingGroupBizId'];
        }
        if (isset($map['ConfigItemInformation'])) {
            $model->configItemInformation = $map['ConfigItemInformation'];
        }

        return $model;
    }
}
