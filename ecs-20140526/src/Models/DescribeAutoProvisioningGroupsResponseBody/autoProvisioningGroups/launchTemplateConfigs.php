<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups;

use AlibabaCloud\Tea\Model;

class launchTemplateConfigs extends Model
{
    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var float
     */
    public $maxPrice;

    /**
     * @var float
     */
    public $priority;

    /**
     * @var float
     */
    public $weightedCapacity;

    /**
     * @var string
     */
    public $instanceType;
    protected $_name = [
        'vSwitchId'        => 'VSwitchId',
        'maxPrice'         => 'MaxPrice',
        'priority'         => 'Priority',
        'weightedCapacity' => 'WeightedCapacity',
        'instanceType'     => 'InstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->maxPrice) {
            $res['MaxPrice'] = $this->maxPrice;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->weightedCapacity) {
            $res['WeightedCapacity'] = $this->weightedCapacity;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return launchTemplateConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['MaxPrice'])) {
            $model->maxPrice = $map['MaxPrice'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['WeightedCapacity'])) {
            $model->weightedCapacity = $map['WeightedCapacity'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        return $model;
    }
}
