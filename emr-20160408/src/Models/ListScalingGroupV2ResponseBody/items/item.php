<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListScalingGroupV2ResponseBody\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $scalingInMode;

    /**
     * @var int
     */
    public $scalingMaxSize;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $hostGroupBizId;

    /**
     * @var int
     */
    public $scalingMinSize;

    /**
     * @var string
     */
    public $activeStatus;

    /**
     * @var string
     */
    public $scalingGroupId;
    protected $_name = [
        'description'    => 'Description',
        'scalingInMode'  => 'ScalingInMode',
        'scalingMaxSize' => 'ScalingMaxSize',
        'name'           => 'Name',
        'hostGroupBizId' => 'HostGroupBizId',
        'scalingMinSize' => 'ScalingMinSize',
        'activeStatus'   => 'ActiveStatus',
        'scalingGroupId' => 'ScalingGroupId',
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
        if (null !== $this->scalingInMode) {
            $res['ScalingInMode'] = $this->scalingInMode;
        }
        if (null !== $this->scalingMaxSize) {
            $res['ScalingMaxSize'] = $this->scalingMaxSize;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->hostGroupBizId) {
            $res['HostGroupBizId'] = $this->hostGroupBizId;
        }
        if (null !== $this->scalingMinSize) {
            $res['ScalingMinSize'] = $this->scalingMinSize;
        }
        if (null !== $this->activeStatus) {
            $res['ActiveStatus'] = $this->activeStatus;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ScalingInMode'])) {
            $model->scalingInMode = $map['ScalingInMode'];
        }
        if (isset($map['ScalingMaxSize'])) {
            $model->scalingMaxSize = $map['ScalingMaxSize'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['HostGroupBizId'])) {
            $model->hostGroupBizId = $map['HostGroupBizId'];
        }
        if (isset($map['ScalingMinSize'])) {
            $model->scalingMinSize = $map['ScalingMinSize'];
        }
        if (isset($map['ActiveStatus'])) {
            $model->activeStatus = $map['ActiveStatus'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }

        return $model;
    }
}
