<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class GetEdgeInstanceMessageRoutingRequest extends Model
{
    /**
     * @example 8jKxIuMVT9rX********
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

    /**
     * @example 123456
     *
     * @var int
     */
    public $routeId;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'iotInstanceId' => 'IotInstanceId',
        'routeId'       => 'RouteId',
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
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->routeId) {
            $res['RouteId'] = $this->routeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEdgeInstanceMessageRoutingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['RouteId'])) {
            $model->routeId = $map['RouteId'];
        }

        return $model;
    }
}
