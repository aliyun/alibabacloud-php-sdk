<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Tea\Model;

class ConfigHealthCheckRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example tcp
     *
     * @var string
     */
    public $forwardProtocol;

    /**
     * @description This parameter is required.
     *
     * @example 233
     *
     * @var int
     */
    public $frontendPort;

    /**
     * @description This parameter is required.
     *
     * @example {"Type":"tcp","Timeout":10,"Port":80,"Interval":10,"Up":10,"Down":40}"}
     *
     * @var string
     */
    public $healthCheck;

    /**
     * @description This parameter is required.
     *
     * @example ddoscoo-cn-XXXXXX
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'forwardProtocol' => 'ForwardProtocol',
        'frontendPort'    => 'FrontendPort',
        'healthCheck'     => 'HealthCheck',
        'instanceId'      => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forwardProtocol) {
            $res['ForwardProtocol'] = $this->forwardProtocol;
        }
        if (null !== $this->frontendPort) {
            $res['FrontendPort'] = $this->frontendPort;
        }
        if (null !== $this->healthCheck) {
            $res['HealthCheck'] = $this->healthCheck;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigHealthCheckRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForwardProtocol'])) {
            $model->forwardProtocol = $map['ForwardProtocol'];
        }
        if (isset($map['FrontendPort'])) {
            $model->frontendPort = $map['FrontendPort'];
        }
        if (isset($map['HealthCheck'])) {
            $model->healthCheck = $map['HealthCheck'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
