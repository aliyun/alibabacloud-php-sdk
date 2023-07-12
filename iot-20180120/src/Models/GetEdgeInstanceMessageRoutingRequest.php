<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class GetEdgeInstanceMessageRoutingRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
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
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('routeId', $this->routeId, true);
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
