<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class DescribeScalingConfigItemV2ResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

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

    /**
     * @var string
     */
    public $configItemType;
    protected $_name = [
        'requestId'              => 'RequestId',
        'scalingConfigItemBizId' => 'ScalingConfigItemBizId',
        'scalingGroupBizId'      => 'ScalingGroupBizId',
        'configItemInformation'  => 'ConfigItemInformation',
        'configItemType'         => 'ConfigItemType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (null !== $this->configItemType) {
            $res['ConfigItemType'] = $this->configItemType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScalingConfigItemV2ResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
        if (isset($map['ConfigItemType'])) {
            $model->configItemType = $map['ConfigItemType'];
        }

        return $model;
    }
}
