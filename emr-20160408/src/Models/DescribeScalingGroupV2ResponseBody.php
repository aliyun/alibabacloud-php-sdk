<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class DescribeScalingGroupV2ResponseBody extends Model
{
    /**
     * @var string
     */
    public $activeStatus;

    /**
     * @var string
     */
    public $configState;

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
    public $name;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var string
     */
    public $scalingInMode;

    /**
     * @var int
     */
    public $scalingMaxSize;

    /**
     * @var int
     */
    public $scalingMinSize;
    protected $_name = [
        'activeStatus'   => 'ActiveStatus',
        'configState'    => 'ConfigState',
        'description'    => 'Description',
        'hostGroupBizId' => 'HostGroupBizId',
        'name'           => 'Name',
        'requestId'      => 'RequestId',
        'scalingGroupId' => 'ScalingGroupId',
        'scalingInMode'  => 'ScalingInMode',
        'scalingMaxSize' => 'ScalingMaxSize',
        'scalingMinSize' => 'ScalingMinSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeStatus) {
            $res['ActiveStatus'] = $this->activeStatus;
        }
        if (null !== $this->configState) {
            $res['ConfigState'] = $this->configState;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->hostGroupBizId) {
            $res['HostGroupBizId'] = $this->hostGroupBizId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->scalingInMode) {
            $res['ScalingInMode'] = $this->scalingInMode;
        }
        if (null !== $this->scalingMaxSize) {
            $res['ScalingMaxSize'] = $this->scalingMaxSize;
        }
        if (null !== $this->scalingMinSize) {
            $res['ScalingMinSize'] = $this->scalingMinSize;
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
        if (isset($map['ActiveStatus'])) {
            $model->activeStatus = $map['ActiveStatus'];
        }
        if (isset($map['ConfigState'])) {
            $model->configState = $map['ConfigState'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['HostGroupBizId'])) {
            $model->hostGroupBizId = $map['HostGroupBizId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['ScalingInMode'])) {
            $model->scalingInMode = $map['ScalingInMode'];
        }
        if (isset($map['ScalingMaxSize'])) {
            $model->scalingMaxSize = $map['ScalingMaxSize'];
        }
        if (isset($map['ScalingMinSize'])) {
            $model->scalingMinSize = $map['ScalingMinSize'];
        }

        return $model;
    }
}
