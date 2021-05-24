<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerListenersResponseBody\listeners;

use AlibabaCloud\Tea\Model;

class UDPListenerConfig extends Model
{
    /**
     * @var int
     */
    public $connectionDrainTimeout;

    /**
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @var string
     */
    public $healthCheckExp;

    /**
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @var int
     */
    public $healthCheckConnectTimeout;

    /**
     * @var string
     */
    public $masterSlaveServerGroupId;

    /**
     * @var int
     */
    public $healthyThreshold;

    /**
     * @var int
     */
    public $unhealthyThreshold;

    /**
     * @var string
     */
    public $connectionDrain;

    /**
     * @var string
     */
    public $healthCheckReq;

    /**
     * @var string
     */
    public $healthCheck;
    protected $_name = [
        'connectionDrainTimeout'    => 'ConnectionDrainTimeout',
        'healthCheckInterval'       => 'HealthCheckInterval',
        'healthCheckExp'            => 'HealthCheckExp',
        'healthCheckConnectPort'    => 'HealthCheckConnectPort',
        'healthCheckConnectTimeout' => 'HealthCheckConnectTimeout',
        'masterSlaveServerGroupId'  => 'MasterSlaveServerGroupId',
        'healthyThreshold'          => 'HealthyThreshold',
        'unhealthyThreshold'        => 'UnhealthyThreshold',
        'connectionDrain'           => 'ConnectionDrain',
        'healthCheckReq'            => 'HealthCheckReq',
        'healthCheck'               => 'HealthCheck',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionDrainTimeout) {
            $res['ConnectionDrainTimeout'] = $this->connectionDrainTimeout;
        }
        if (null !== $this->healthCheckInterval) {
            $res['HealthCheckInterval'] = $this->healthCheckInterval;
        }
        if (null !== $this->healthCheckExp) {
            $res['HealthCheckExp'] = $this->healthCheckExp;
        }
        if (null !== $this->healthCheckConnectPort) {
            $res['HealthCheckConnectPort'] = $this->healthCheckConnectPort;
        }
        if (null !== $this->healthCheckConnectTimeout) {
            $res['HealthCheckConnectTimeout'] = $this->healthCheckConnectTimeout;
        }
        if (null !== $this->masterSlaveServerGroupId) {
            $res['MasterSlaveServerGroupId'] = $this->masterSlaveServerGroupId;
        }
        if (null !== $this->healthyThreshold) {
            $res['HealthyThreshold'] = $this->healthyThreshold;
        }
        if (null !== $this->unhealthyThreshold) {
            $res['UnhealthyThreshold'] = $this->unhealthyThreshold;
        }
        if (null !== $this->connectionDrain) {
            $res['ConnectionDrain'] = $this->connectionDrain;
        }
        if (null !== $this->healthCheckReq) {
            $res['HealthCheckReq'] = $this->healthCheckReq;
        }
        if (null !== $this->healthCheck) {
            $res['HealthCheck'] = $this->healthCheck;
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
        if (isset($map['ConnectionDrainTimeout'])) {
            $model->connectionDrainTimeout = $map['ConnectionDrainTimeout'];
        }
        if (isset($map['HealthCheckInterval'])) {
            $model->healthCheckInterval = $map['HealthCheckInterval'];
        }
        if (isset($map['HealthCheckExp'])) {
            $model->healthCheckExp = $map['HealthCheckExp'];
        }
        if (isset($map['HealthCheckConnectPort'])) {
            $model->healthCheckConnectPort = $map['HealthCheckConnectPort'];
        }
        if (isset($map['HealthCheckConnectTimeout'])) {
            $model->healthCheckConnectTimeout = $map['HealthCheckConnectTimeout'];
        }
        if (isset($map['MasterSlaveServerGroupId'])) {
            $model->masterSlaveServerGroupId = $map['MasterSlaveServerGroupId'];
        }
        if (isset($map['HealthyThreshold'])) {
            $model->healthyThreshold = $map['HealthyThreshold'];
        }
        if (isset($map['UnhealthyThreshold'])) {
            $model->unhealthyThreshold = $map['UnhealthyThreshold'];
        }
        if (isset($map['ConnectionDrain'])) {
            $model->connectionDrain = $map['ConnectionDrain'];
        }
        if (isset($map['HealthCheckReq'])) {
            $model->healthCheckReq = $map['HealthCheckReq'];
        }
        if (isset($map['HealthCheck'])) {
            $model->healthCheck = $map['HealthCheck'];
        }

        return $model;
    }
}
