<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20130221\Models;

use AlibabaCloud\Dara\Model;

class DescribeLoadBalancerTCPListenerAttributeResponseBody extends Model
{
    /**
     * @var int
     */
    public $backendServerPort;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var int
     */
    public $connectPort;

    /**
     * @var int
     */
    public $connectTimeout;

    /**
     * @var int
     */
    public $establishedTimeout;

    /**
     * @var string
     */
    public $healthCheck;

    /**
     * @var string
     */
    public $healthCheckDomain;

    /**
     * @var string
     */
    public $healthCheckHttpCode;

    /**
     * @var string
     */
    public $healthCheckType;

    /**
     * @var string
     */
    public $healthCheckURI;

    /**
     * @var int
     */
    public $healthyThreshold;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var int
     */
    public $listenerPort;

    /**
     * @var string
     */
    public $masterSlaveServerGroupId;

    /**
     * @var int
     */
    public $maxConnection;

    /**
     * @var int
     */
    public $persistenceTimeout;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $scheduler;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $synProxy;

    /**
     * @var int
     */
    public $unhealthyThreshold;

    /**
     * @var string
     */
    public $VServerGroupId;
    protected $_name = [
        'backendServerPort' => 'BackendServerPort',
        'bandwidth' => 'Bandwidth',
        'connectPort' => 'ConnectPort',
        'connectTimeout' => 'ConnectTimeout',
        'establishedTimeout' => 'EstablishedTimeout',
        'healthCheck' => 'HealthCheck',
        'healthCheckDomain' => 'HealthCheckDomain',
        'healthCheckHttpCode' => 'HealthCheckHttpCode',
        'healthCheckType' => 'HealthCheckType',
        'healthCheckURI' => 'HealthCheckURI',
        'healthyThreshold' => 'HealthyThreshold',
        'interval' => 'Interval',
        'listenerPort' => 'ListenerPort',
        'masterSlaveServerGroupId' => 'MasterSlaveServerGroupId',
        'maxConnection' => 'MaxConnection',
        'persistenceTimeout' => 'PersistenceTimeout',
        'requestId' => 'RequestId',
        'scheduler' => 'Scheduler',
        'status' => 'Status',
        'synProxy' => 'SynProxy',
        'unhealthyThreshold' => 'UnhealthyThreshold',
        'VServerGroupId' => 'VServerGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backendServerPort) {
            $res['BackendServerPort'] = $this->backendServerPort;
        }

        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->connectPort) {
            $res['ConnectPort'] = $this->connectPort;
        }

        if (null !== $this->connectTimeout) {
            $res['ConnectTimeout'] = $this->connectTimeout;
        }

        if (null !== $this->establishedTimeout) {
            $res['EstablishedTimeout'] = $this->establishedTimeout;
        }

        if (null !== $this->healthCheck) {
            $res['HealthCheck'] = $this->healthCheck;
        }

        if (null !== $this->healthCheckDomain) {
            $res['HealthCheckDomain'] = $this->healthCheckDomain;
        }

        if (null !== $this->healthCheckHttpCode) {
            $res['HealthCheckHttpCode'] = $this->healthCheckHttpCode;
        }

        if (null !== $this->healthCheckType) {
            $res['HealthCheckType'] = $this->healthCheckType;
        }

        if (null !== $this->healthCheckURI) {
            $res['HealthCheckURI'] = $this->healthCheckURI;
        }

        if (null !== $this->healthyThreshold) {
            $res['HealthyThreshold'] = $this->healthyThreshold;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }

        if (null !== $this->masterSlaveServerGroupId) {
            $res['MasterSlaveServerGroupId'] = $this->masterSlaveServerGroupId;
        }

        if (null !== $this->maxConnection) {
            $res['MaxConnection'] = $this->maxConnection;
        }

        if (null !== $this->persistenceTimeout) {
            $res['PersistenceTimeout'] = $this->persistenceTimeout;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->synProxy) {
            $res['SynProxy'] = $this->synProxy;
        }

        if (null !== $this->unhealthyThreshold) {
            $res['UnhealthyThreshold'] = $this->unhealthyThreshold;
        }

        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendServerPort'])) {
            $model->backendServerPort = $map['BackendServerPort'];
        }

        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['ConnectPort'])) {
            $model->connectPort = $map['ConnectPort'];
        }

        if (isset($map['ConnectTimeout'])) {
            $model->connectTimeout = $map['ConnectTimeout'];
        }

        if (isset($map['EstablishedTimeout'])) {
            $model->establishedTimeout = $map['EstablishedTimeout'];
        }

        if (isset($map['HealthCheck'])) {
            $model->healthCheck = $map['HealthCheck'];
        }

        if (isset($map['HealthCheckDomain'])) {
            $model->healthCheckDomain = $map['HealthCheckDomain'];
        }

        if (isset($map['HealthCheckHttpCode'])) {
            $model->healthCheckHttpCode = $map['HealthCheckHttpCode'];
        }

        if (isset($map['HealthCheckType'])) {
            $model->healthCheckType = $map['HealthCheckType'];
        }

        if (isset($map['HealthCheckURI'])) {
            $model->healthCheckURI = $map['HealthCheckURI'];
        }

        if (isset($map['HealthyThreshold'])) {
            $model->healthyThreshold = $map['HealthyThreshold'];
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }

        if (isset($map['MasterSlaveServerGroupId'])) {
            $model->masterSlaveServerGroupId = $map['MasterSlaveServerGroupId'];
        }

        if (isset($map['MaxConnection'])) {
            $model->maxConnection = $map['MaxConnection'];
        }

        if (isset($map['PersistenceTimeout'])) {
            $model->persistenceTimeout = $map['PersistenceTimeout'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SynProxy'])) {
            $model->synProxy = $map['SynProxy'];
        }

        if (isset($map['UnhealthyThreshold'])) {
            $model->unhealthyThreshold = $map['UnhealthyThreshold'];
        }

        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }

        return $model;
    }
}
