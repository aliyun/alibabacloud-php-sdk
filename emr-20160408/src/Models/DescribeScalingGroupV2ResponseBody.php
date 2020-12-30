<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class DescribeScalingGroupV2ResponseBody extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $hostGroupBizId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $configState;

    /**
     * @var string
     */
    public $scalingInMode;

    /**
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var int
     */
    public $scalingMaxSize;

    /**
     * @var int
     */
    public $scalingMinSize;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $activeStatus;
    protected $_name = [
        'description'    => 'Description',
        'hostGroupBizId' => 'HostGroupBizId',
        'requestId'      => 'RequestId',
        'configState'    => 'ConfigState',
        'scalingInMode'  => 'ScalingInMode',
        'scalingGroupId' => 'ScalingGroupId',
        'scalingMaxSize' => 'ScalingMaxSize',
        'scalingMinSize' => 'ScalingMinSize',
        'name'           => 'Name',
        'activeStatus'   => 'ActiveStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->hostGroupBizId) {
            $res['HostGroupBizId'] = $this->hostGroupBizId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->configState) {
            $res['ConfigState'] = $this->configState;
        }
        if (null !== $this->scalingInMode) {
            $res['ScalingInMode'] = $this->scalingInMode;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->scalingMaxSize) {
            $res['ScalingMaxSize'] = $this->scalingMaxSize;
        }
        if (null !== $this->scalingMinSize) {
            $res['ScalingMinSize'] = $this->scalingMinSize;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->activeStatus) {
            $res['ActiveStatus'] = $this->activeStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScalingGroupV2ResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['HostGroupBizId'])) {
            $model->hostGroupBizId = $map['HostGroupBizId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ConfigState'])) {
            $model->configState = $map['ConfigState'];
        }
        if (isset($map['ScalingInMode'])) {
            $model->scalingInMode = $map['ScalingInMode'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['ScalingMaxSize'])) {
            $model->scalingMaxSize = $map['ScalingMaxSize'];
        }
        if (isset($map['ScalingMinSize'])) {
            $model->scalingMinSize = $map['ScalingMinSize'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ActiveStatus'])) {
            $model->activeStatus = $map['ActiveStatus'];
        }

        return $model;
    }
}
