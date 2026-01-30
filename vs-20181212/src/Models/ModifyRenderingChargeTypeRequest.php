<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;

class ModifyRenderingChargeTypeRequest extends Model
{
    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $instanceBillingCycle;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $renderingInstanceId;
    protected $_name = [
        'autoRenew' => 'AutoRenew',
        'instanceBillingCycle' => 'InstanceBillingCycle',
        'instanceChargeType' => 'InstanceChargeType',
        'period' => 'Period',
        'renderingInstanceId' => 'RenderingInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->instanceBillingCycle) {
            $res['InstanceBillingCycle'] = $this->instanceBillingCycle;
        }

        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->renderingInstanceId) {
            $res['RenderingInstanceId'] = $this->renderingInstanceId;
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
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['InstanceBillingCycle'])) {
            $model->instanceBillingCycle = $map['InstanceBillingCycle'];
        }

        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['RenderingInstanceId'])) {
            $model->renderingInstanceId = $map['RenderingInstanceId'];
        }

        return $model;
    }
}
