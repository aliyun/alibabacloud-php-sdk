<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class BatchBindDeviceToEdgeInstanceWithDriverRequest extends Model
{
    /**
     * @description The IDs of the devices.
     *
     * >  You can specify a maximum of 20 device IDs when you call the BatchBindDeviceToEdgeInstanceWithDriver operation.
     * @example 021d154d2a2f4dd7a489773d9e04****
     *
     * @var string
     */
    public $driverId;

    /**
     * @description The ID of the driver. To obtain the driver ID, perform the following steps: Log on to the [Link IoT Edge console](https://iot.console.aliyun.com/le/instance/list). On the **Drivers** page, move the pointer over the name of the driver that you want to configure and obtain the driver ID.
     *
     * You can also call the [QueryEdgeDriver](~~155776~~) operation to query the driver ID.
     * @example F3APY0tPLhmgGtx0****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example BXPV9Ks3bxwM9fD****0000101
     *
     * @var string[]
     */
    public $iotIds;

    /**
     * @description The ID of the edge instance. To obtain the instance ID, perform the following steps: Log on to the [Link IoT Edge console](https://iot.console.aliyun.com/le/instance/list). On the **Edge Instances** page, move the pointer over the name of the edge instance to which you want to bind multiple devices and obtain the instance ID.
     *
     * You can also call the [QueryEdgeInstance](~~135214~~) operation to query the instance ID.
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;
    protected $_name = [
        'driverId'      => 'DriverId',
        'instanceId'    => 'InstanceId',
        'iotIds'        => 'IotIds',
        'iotInstanceId' => 'IotInstanceId',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->iotIds) {
            $res['IotIds'] = $this->iotIds;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchBindDeviceToEdgeInstanceWithDriverRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DriverId'])) {
            $model->driverId = $map['DriverId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IotIds'])) {
            if (!empty($map['IotIds'])) {
                $model->iotIds = $map['IotIds'];
            }
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        return $model;
    }
}
