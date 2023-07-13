<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class BatchUnbindDeviceFromEdgeInstanceRequest extends Model
{
    /**
     * @description The ID of the edge instance. To obtain the instance ID, perform the following steps: Log on to the [Link IoT Edge console](https://iot.console.aliyun.com/le/instance/list). On the **Edge Instances** page, move the pointer over the name of the edge instance from which you want to unbind multiple devices and obtain the instance ID.
     *
     * You can also call the [QueryEdgeInstance](~~135214~~) operation to query the instance ID.
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
     * @description The ID of the Internet of Things (IoT) service instance. This parameter is not required for the public instance but required for Enterprise Edition instances.
     *
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;
    protected $_name = [
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
     * @return BatchUnbindDeviceFromEdgeInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
