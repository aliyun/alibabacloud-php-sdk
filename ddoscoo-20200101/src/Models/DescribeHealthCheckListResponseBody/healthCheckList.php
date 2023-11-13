<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeHealthCheckListResponseBody;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeHealthCheckListResponseBody\healthCheckList\healthCheck;
use AlibabaCloud\Tea\Model;

class healthCheckList extends Model
{
    /**
     * @description The forwarding port.
     *
     * @example 8080
     *
     * @var int
     */
    public $frontendPort;

    /**
     * @description The health check configuration.
     *
     * @var healthCheck
     */
    public $healthCheck;

    /**
     * @description The ID of the instance.
     *
     * @example ddoscoo-cn-mp91j1ao****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The forwarding protocol. Valid values:
     *
     *   **tcp**
     *   **udp**
     *
     * @example tcp
     *
     * @var string
     */
    public $protocol;
    protected $_name = [
        'frontendPort' => 'FrontendPort',
        'healthCheck'  => 'HealthCheck',
        'instanceId'   => 'InstanceId',
        'protocol'     => 'Protocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->frontendPort) {
            $res['FrontendPort'] = $this->frontendPort;
        }
        if (null !== $this->healthCheck) {
            $res['HealthCheck'] = null !== $this->healthCheck ? $this->healthCheck->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return healthCheckList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FrontendPort'])) {
            $model->frontendPort = $map['FrontendPort'];
        }
        if (isset($map['HealthCheck'])) {
            $model->healthCheck = healthCheck::fromMap($map['HealthCheck']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        return $model;
    }
}
