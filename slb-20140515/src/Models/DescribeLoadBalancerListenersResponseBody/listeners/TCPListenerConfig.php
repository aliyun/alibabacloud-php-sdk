<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerListenersResponseBody\listeners;

use AlibabaCloud\Tea\Model;

class TCPListenerConfig extends Model
{
    /**
     * @var string
     */
    public $healthCheckHttpCode;

    /**
     * @var int
     */
    public $connectionDrainTimeout;

    /**
     * @var int
     */
    public $persistenceTimeout;

    /**
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @var string
     */
    public $healthCheckURI;

    /**
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @var int
     */
    public $establishedTimeout;

    /**
     * @var string
     */
    public $healthCheckType;

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
     * @var string
     */
    public $healthCheckDomain;

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
    public $healthCheckMethod;

    /**
     * @var string
     */
    public $healthCheck;
    protected $_name = [
        'healthCheckHttpCode'       => 'HealthCheckHttpCode',
        'connectionDrainTimeout'    => 'ConnectionDrainTimeout',
        'persistenceTimeout'        => 'PersistenceTimeout',
        'healthCheckInterval'       => 'HealthCheckInterval',
        'healthCheckURI'            => 'HealthCheckURI',
        'healthCheckConnectPort'    => 'HealthCheckConnectPort',
        'establishedTimeout'        => 'EstablishedTimeout',
        'healthCheckType'           => 'HealthCheckType',
        'healthCheckConnectTimeout' => 'HealthCheckConnectTimeout',
        'masterSlaveServerGroupId'  => 'MasterSlaveServerGroupId',
        'healthyThreshold'          => 'HealthyThreshold',
        'healthCheckDomain'         => 'HealthCheckDomain',
        'unhealthyThreshold'        => 'UnhealthyThreshold',
        'connectionDrain'           => 'ConnectionDrain',
        'healthCheckMethod'         => 'HealthCheckMethod',
        'healthCheck'               => 'HealthCheck',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->healthCheckHttpCode) {
            $res['HealthCheckHttpCode'] = $this->healthCheckHttpCode;
        }
        if (null !== $this->connectionDrainTimeout) {
            $res['ConnectionDrainTimeout'] = $this->connectionDrainTimeout;
        }
        if (null !== $this->persistenceTimeout) {
            $res['PersistenceTimeout'] = $this->persistenceTimeout;
        }
        if (null !== $this->healthCheckInterval) {
            $res['HealthCheckInterval'] = $this->healthCheckInterval;
        }
        if (null !== $this->healthCheckURI) {
            $res['HealthCheckURI'] = $this->healthCheckURI;
        }
        if (null !== $this->healthCheckConnectPort) {
            $res['HealthCheckConnectPort'] = $this->healthCheckConnectPort;
        }
        if (null !== $this->establishedTimeout) {
            $res['EstablishedTimeout'] = $this->establishedTimeout;
        }
        if (null !== $this->healthCheckType) {
            $res['HealthCheckType'] = $this->healthCheckType;
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
        if (null !== $this->healthCheckDomain) {
            $res['HealthCheckDomain'] = $this->healthCheckDomain;
        }
        if (null !== $this->unhealthyThreshold) {
            $res['UnhealthyThreshold'] = $this->unhealthyThreshold;
        }
        if (null !== $this->connectionDrain) {
            $res['ConnectionDrain'] = $this->connectionDrain;
        }
        if (null !== $this->healthCheckMethod) {
            $res['HealthCheckMethod'] = $this->healthCheckMethod;
        }
        if (null !== $this->healthCheck) {
            $res['HealthCheck'] = $this->healthCheck;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TCPListenerConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HealthCheckHttpCode'])) {
            $model->healthCheckHttpCode = $map['HealthCheckHttpCode'];
        }
        if (isset($map['ConnectionDrainTimeout'])) {
            $model->connectionDrainTimeout = $map['ConnectionDrainTimeout'];
        }
        if (isset($map['PersistenceTimeout'])) {
            $model->persistenceTimeout = $map['PersistenceTimeout'];
        }
        if (isset($map['HealthCheckInterval'])) {
            $model->healthCheckInterval = $map['HealthCheckInterval'];
        }
        if (isset($map['HealthCheckURI'])) {
            $model->healthCheckURI = $map['HealthCheckURI'];
        }
        if (isset($map['HealthCheckConnectPort'])) {
            $model->healthCheckConnectPort = $map['HealthCheckConnectPort'];
        }
        if (isset($map['EstablishedTimeout'])) {
            $model->establishedTimeout = $map['EstablishedTimeout'];
        }
        if (isset($map['HealthCheckType'])) {
            $model->healthCheckType = $map['HealthCheckType'];
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
        if (isset($map['HealthCheckDomain'])) {
            $model->healthCheckDomain = $map['HealthCheckDomain'];
        }
        if (isset($map['UnhealthyThreshold'])) {
            $model->unhealthyThreshold = $map['UnhealthyThreshold'];
        }
        if (isset($map['ConnectionDrain'])) {
            $model->connectionDrain = $map['ConnectionDrain'];
        }
        if (isset($map['HealthCheckMethod'])) {
            $model->healthCheckMethod = $map['HealthCheckMethod'];
        }
        if (isset($map['HealthCheck'])) {
            $model->healthCheck = $map['HealthCheck'];
        }

        return $model;
    }
}
