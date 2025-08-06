<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups\autoProvisioningGroup\launchTemplateConfigs;

use AlibabaCloud\Dara\Model;

class launchTemplateConfig extends Model
{
    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var float
     */
    public $maxPrice;

    /**
     * @var float
     */
    public $priority;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var float
     */
    public $weightedCapacity;
    protected $_name = [
        'instanceType' => 'InstanceType',
        'maxPrice' => 'MaxPrice',
        'priority' => 'Priority',
        'vSwitchId' => 'VSwitchId',
        'weightedCapacity' => 'WeightedCapacity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->maxPrice) {
            $res['MaxPrice'] = $this->maxPrice;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->weightedCapacity) {
            $res['WeightedCapacity'] = $this->weightedCapacity;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['MaxPrice'])) {
            $model->maxPrice = $map['MaxPrice'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['WeightedCapacity'])) {
            $model->weightedCapacity = $map['WeightedCapacity'];
        }

        return $model;
    }
}
