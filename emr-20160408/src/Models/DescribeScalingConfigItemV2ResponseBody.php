<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class DescribeScalingConfigItemV2ResponseBody extends Model
{
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
     * @example 6C96FD2C-95A0-4C03-8A19-7D84A4BAAA1E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example SRB-0F2A154CFD4D****
     *
     * @var string
     */
    public $scalingConfigItemBizId;

    /**
     * @example SGB-0F2A154CFD4D****
     *
     * @var string
     */
    public $scalingGroupBizId;
    protected $_name = [
        'configItemInformation'  => 'ConfigItemInformation',
        'configItemType'         => 'ConfigItemType',
        'requestId'              => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return DescribeScalingConfigItemV2ResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
