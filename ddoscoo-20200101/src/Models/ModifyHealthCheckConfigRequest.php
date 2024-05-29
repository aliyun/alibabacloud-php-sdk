<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyHealthCheckConfigRequest extends Model
{
    /**
     * @description The forwarding protocol. Valid values:
     *
     *   **tcp**
     *   **udp**
     *
     * This parameter is required.
     * @example tcp
     *
     * @var string
     */
    public $forwardProtocol;

    /**
     * @description The forwarding port.
     *
     * This parameter is required.
     * @example 8080
     *
     * @var int
     */
    public $frontendPort;

    /**
     * @description The details of the health check configuration. This parameter is a JSON string. The string contains the following fields:
     *
     *   **Type**: the protocol type. This field is required and must be of the STRING type. Valid values: **tcp** (Layer 4) and **http** (Layer 7).
     *
     *   **Domain**: the domain name, which must be of the STRING type.
     *
     **
     *
     **Note**This parameter is returned only when the Layer 7 health check configuration is queried.
     *
     *   **Uri**: the check path, which must be of the STRING type.
     *
     **
     *
     **Note**This parameter is returned only when the Layer 7 health check configuration is queried.
     *
     *   **Timeout**: the response timeout period, which must be of the INTEGER type. Valid values: **1** to **30**. Unit: seconds.
     *
     *   **Port**: the port on which you want to perform the health check, which must be of the INTEGER type.
     *
     *   **Interval**: the health check interval, which must be of the INTEGER type. Valid values: **1** to **30**. Unit: seconds.
     *
     *   **Up**: the number of consecutive successful health checks that must occur before declaring a port healthy, which must be of the INTEGER type. Valid values: **1** to **10**.
     *
     *   **Down**: the number of consecutive failed health checks that must occur before declaring a port unhealthy, which must be of the INTEGER type. Valid values: **1** to **10**.
     *
     * This parameter is required.
     * @example {"Type":"tcp","Timeout":10,"Port":8080,"Interval":10,"Up":10,"Down":40}
     *
     * @var string
     */
    public $healthCheck;

    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example ddoscoo-cn-mp91j1ao****
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
     * @return ModifyHealthCheckConfigRequest
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
