<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class ModifyRCInstanceNetworkSpecRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $internetMaxBandwidthOut;
    /**
     * @var string
     */
    public $networkChargeType;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'instanceId'              => 'InstanceId',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'networkChargeType'       => 'NetworkChargeType',
        'regionId'                => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }

        if (null !== $this->networkChargeType) {
            $res['NetworkChargeType'] = $this->networkChargeType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }

        if (isset($map['NetworkChargeType'])) {
            $model->networkChargeType = $map['NetworkChargeType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
