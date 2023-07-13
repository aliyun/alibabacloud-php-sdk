<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class BindDriverToEdgeInstanceRequest extends Model
{
    /**
     * @description The ID of the driver. To obtain the driver ID, perform the following steps: Log on to the [Link IoT Edge console](https://iot.console.aliyun.com/le/instance/list). On the **Drivers** page, move the pointer over the name of the driver that you want to bind and obtain the driver ID.
     *
     * You can also call the [QueryEdgeDriver](~~155776~~) operation to query the driver ID.
     * @example 9c1ae7bd59f1469abbdccc959228****
     *
     * @var string
     */
    public $driverId;

    /**
     * @description The version number of the driver. By default, if you do not specify this parameter, the latest version of the driver is used.
     *
     * @example 2.0.0
     *
     * @var string
     */
    public $driverVersion;

    /**
     * @description The ID of the edge instance. To obtain the instance ID, perform the following steps: Log on to the [Link IoT Edge console](https://iot.console.aliyun.com/le/instance/list). On the **Edge Instances** page, move the pointer over the name of the edge instance to which you want to bind a driver and obtain the instance ID.
     *
     * You can also call the [QueryEdgeInstance](~~135214~~) operation to query the instance ID.
     * @example F3APY0tPLhmgGtx0****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the Internet of Things (IoT) service instance. This parameter is not required for the public instance but required for Enterprise Edition instances.
     *
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The ID of the order.
     *
     * >  This parameter is required if you use a third-party driver that is purchased from the IoT marketplace. If an official or self-developed driver is used, you do not need to specify this parameter.
     * @example 11123458765****
     *
     * @var string
     */
    public $orderId;
    protected $_name = [
        'driverId'      => 'DriverId',
        'driverVersion' => 'DriverVersion',
        'instanceId'    => 'InstanceId',
        'iotInstanceId' => 'IotInstanceId',
        'orderId'       => 'OrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->driverId) {
            $res['DriverId'] = $this->driverId;
        }
        if (null !== $this->driverVersion) {
            $res['DriverVersion'] = $this->driverVersion;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindDriverToEdgeInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DriverId'])) {
            $model->driverId = $map['DriverId'];
        }
        if (isset($map['DriverVersion'])) {
            $model->driverVersion = $map['DriverVersion'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        return $model;
    }
}
