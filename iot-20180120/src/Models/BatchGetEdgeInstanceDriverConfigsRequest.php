<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class BatchGetEdgeInstanceDriverConfigsRequest extends Model
{
    /**
     * @example 021d154d2a2f4dd7a489773d9e04****
     *
     * @var string[]
     */
    public $driverIds;

    /**
     * @example F3APY0tPLhmgGtx0****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;
    protected $_name = [
        'driverIds'     => 'DriverIds',
        'instanceId'    => 'InstanceId',
        'iotInstanceId' => 'IotInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->driverIds) {
            $res['DriverIds'] = $this->driverIds;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchGetEdgeInstanceDriverConfigsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DriverIds'])) {
            if (!empty($map['DriverIds'])) {
                $model->driverIds = $map['DriverIds'];
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        return $model;
    }
}
