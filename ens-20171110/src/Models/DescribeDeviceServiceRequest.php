<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeDeviceServiceRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example a2bac6f4-75dc-455e-8389-2dc8e47526d3
     *
     * @var string
     */
    public $appId;

    /**
     * @description This parameter does not take effect.
     *
     * @example cn-chongqing-10
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The ID of the instance.
     *
     * @example i-5sg1owx0g4ojy66ab2tez77r2
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the order.
     *
     * @example 2661b1dd-3453-418d-8182-bb34f79e8d3c
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The ID of the Edge Node Service (ENS) node.
     *
     * @example cn-chongqing-11
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Service ID
     *
     * @example s-cxxxxx
     *
     * @var string
     */
    public $serviceId;
    protected $_name = [
        'appId'       => 'AppId',
        'ensRegionId' => 'EnsRegionId',
        'instanceId'  => 'InstanceId',
        'orderId'     => 'OrderId',
        'regionId'    => 'RegionId',
        'serviceId'   => 'ServiceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDeviceServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        return $model;
    }
}
