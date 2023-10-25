<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerListenersResponseBody\listeners;

use AlibabaCloud\Tea\Model;

class UDPListenerConfig extends Model
{
    /**
     * @description Indicates whether connection draining is enabled. Valid values:
     *
     *   **on**: yes
     *   **off**: no
     *
     * @example off
     *
     * @var string
     */
    public $connectionDrain;

    /**
     * @description The timeout period of connection draining. Unit: seconds.
     *
     * Value values: **10 to 900**.
     * @example 300
     *
     * @var int
     */
    public $connectionDrainTimeout;

    /**
     * @description Indicates whether the health check feature is enabled. Valid values:
     *
     *   **on**: yes
     *   **off**: no
     *
     * @example on
     *
     * @var string
     */
    public $healthCheck;

    /**
     * @description The port that is used for health checks.
     *
     * @example 8080
     *
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @description The timeout period for a health check response.
     *
     * @example 100
     *
     * @var int
     */
    public $healthCheckConnectTimeout;

    /**
     * @description The response string for UDP listener health checks.
     *
     * @example ok
     *
     * @var string
     */
    public $healthCheckExp;

    /**
     * @description The interval between two consecutive health checks. Unit: seconds.
     *
     * @example 5
     *
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @description The request string for UDP listener health checks.
     *
     * @example hello
     *
     * @var string
     */
    public $healthCheckReq;

    /**
     * @description The number of times that a backend server must consecutively pass health checks before it is declared healthy.
     *
     * @example 4
     *
     * @var int
     */
    public $healthyThreshold;

    /**
     * @description The ID of the primary/secondary server group that is associated with the listener.
     *
     * @example rsp-0bfucw****
     *
     * @var string
     */
    public $masterSlaveServerGroupId;

    /**
     * @description Indicates whether the Proxy protocol is used to pass client IP addresses to backend servers. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example false
     *
     * @var string
     */
    public $proxyProtocolV2Enabled;

    /**
     * @description The number of times that a backend server must consecutively fail health checks before it is declared unhealthy.
     *
     * @example 4
     *
     * @var int
     */
    public $unhealthyThreshold;
    protected $_name = [
        'connectionDrain'           => 'ConnectionDrain',
        'connectionDrainTimeout'    => 'ConnectionDrainTimeout',
        'healthCheck'               => 'HealthCheck',
        'healthCheckConnectPort'    => 'HealthCheckConnectPort',
        'healthCheckConnectTimeout' => 'HealthCheckConnectTimeout',
        'healthCheckExp'            => 'HealthCheckExp',
        'healthCheckInterval'       => 'HealthCheckInterval',
        'healthCheckReq'            => 'HealthCheckReq',
        'healthyThreshold'          => 'HealthyThreshold',
        'masterSlaveServerGroupId'  => 'MasterSlaveServerGroupId',
        'proxyProtocolV2Enabled'    => 'ProxyProtocolV2Enabled',
        'unhealthyThreshold'        => 'UnhealthyThreshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionDrain) {
            $res['ConnectionDrain'] = $this->connectionDrain;
        }
        if (null !== $this->connectionDrainTimeout) {
            $res['ConnectionDrainTimeout'] = $this->connectionDrainTimeout;
        }
        if (null !== $this->healthCheck) {
            $res['HealthCheck'] = $this->healthCheck;
        }
        if (null !== $this->healthCheckConnectPort) {
            $res['HealthCheckConnectPort'] = $this->healthCheckConnectPort;
        }
        if (null !== $this->healthCheckConnectTimeout) {
            $res['HealthCheckConnectTimeout'] = $this->healthCheckConnectTimeout;
        }
        if (null !== $this->healthCheckExp) {
            $res['HealthCheckExp'] = $this->healthCheckExp;
        }
        if (null !== $this->healthCheckInterval) {
            $res['HealthCheckInterval'] = $this->healthCheckInterval;
        }
        if (null !== $this->healthCheckReq) {
            $res['HealthCheckReq'] = $this->healthCheckReq;
        }
        if (null !== $this->healthyThreshold) {
            $res['HealthyThreshold'] = $this->healthyThreshold;
        }
        if (null !== $this->masterSlaveServerGroupId) {
            $res['MasterSlaveServerGroupId'] = $this->masterSlaveServerGroupId;
        }
        if (null !== $this->proxyProtocolV2Enabled) {
            $res['ProxyProtocolV2Enabled'] = $this->proxyProtocolV2Enabled;
        }
        if (null !== $this->unhealthyThreshold) {
            $res['UnhealthyThreshold'] = $this->unhealthyThreshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UDPListenerConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionDrain'])) {
            $model->connectionDrain = $map['ConnectionDrain'];
        }
        if (isset($map['ConnectionDrainTimeout'])) {
            $model->connectionDrainTimeout = $map['ConnectionDrainTimeout'];
        }
        if (isset($map['HealthCheck'])) {
            $model->healthCheck = $map['HealthCheck'];
        }
        if (isset($map['HealthCheckConnectPort'])) {
            $model->healthCheckConnectPort = $map['HealthCheckConnectPort'];
        }
        if (isset($map['HealthCheckConnectTimeout'])) {
            $model->healthCheckConnectTimeout = $map['HealthCheckConnectTimeout'];
        }
        if (isset($map['HealthCheckExp'])) {
            $model->healthCheckExp = $map['HealthCheckExp'];
        }
        if (isset($map['HealthCheckInterval'])) {
            $model->healthCheckInterval = $map['HealthCheckInterval'];
        }
        if (isset($map['HealthCheckReq'])) {
            $model->healthCheckReq = $map['HealthCheckReq'];
        }
        if (isset($map['HealthyThreshold'])) {
            $model->healthyThreshold = $map['HealthyThreshold'];
        }
        if (isset($map['MasterSlaveServerGroupId'])) {
            $model->masterSlaveServerGroupId = $map['MasterSlaveServerGroupId'];
        }
        if (isset($map['ProxyProtocolV2Enabled'])) {
            $model->proxyProtocolV2Enabled = $map['ProxyProtocolV2Enabled'];
        }
        if (isset($map['UnhealthyThreshold'])) {
            $model->unhealthyThreshold = $map['UnhealthyThreshold'];
        }

        return $model;
    }
}
