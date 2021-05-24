<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class DescribeLoadBalancerTCPListenerAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $VServerGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $aclType;

    /**
     * @var int
     */
    public $connectionDrainTimeout;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $healthCheckType;

    /**
     * @var string
     */
    public $masterSlaveServerGroupId;

    /**
     * @var int
     */
    public $backendServerPort;

    /**
     * @var string
     */
    public $aclStatus;

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
    public $healthCheckHttpCode;

    /**
     * @var int
     */
    public $persistenceTimeout;

    /**
     * @var int
     */
    public $listenerPort;

    /**
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @var string
     */
    public $healthCheckURI;

    /**
     * @var string
     */
    public $aclId;

    /**
     * @var string
     */
    public $synProxy;

    /**
     * @var string
     */
    public $scheduler;

    /**
     * @var int
     */
    public $establishedTimeout;

    /**
     * @var int
     */
    public $healthCheckConnectTimeout;

    /**
     * @var int
     */
    public $healthyThreshold;

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
        'VServerGroupId'            => 'VServerGroupId',
        'status'                    => 'Status',
        'aclType'                   => 'AclType',
        'connectionDrainTimeout'    => 'ConnectionDrainTimeout',
        'requestId'                 => 'RequestId',
        'healthCheckConnectPort'    => 'HealthCheckConnectPort',
        'description'               => 'Description',
        'bandwidth'                 => 'Bandwidth',
        'healthCheckType'           => 'HealthCheckType',
        'masterSlaveServerGroupId'  => 'MasterSlaveServerGroupId',
        'backendServerPort'         => 'BackendServerPort',
        'aclStatus'                 => 'AclStatus',
        'healthCheckDomain'         => 'HealthCheckDomain',
        'unhealthyThreshold'        => 'UnhealthyThreshold',
        'healthCheckHttpCode'       => 'HealthCheckHttpCode',
        'persistenceTimeout'        => 'PersistenceTimeout',
        'listenerPort'              => 'ListenerPort',
        'healthCheckInterval'       => 'HealthCheckInterval',
        'healthCheckURI'            => 'HealthCheckURI',
        'aclId'                     => 'AclId',
        'synProxy'                  => 'SynProxy',
        'scheduler'                 => 'Scheduler',
        'establishedTimeout'        => 'EstablishedTimeout',
        'healthCheckConnectTimeout' => 'HealthCheckConnectTimeout',
        'healthyThreshold'          => 'HealthyThreshold',
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
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->aclType) {
            $res['AclType'] = $this->aclType;
        }
        if (null !== $this->connectionDrainTimeout) {
            $res['ConnectionDrainTimeout'] = $this->connectionDrainTimeout;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->healthCheckConnectPort) {
            $res['HealthCheckConnectPort'] = $this->healthCheckConnectPort;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->healthCheckType) {
            $res['HealthCheckType'] = $this->healthCheckType;
        }
        if (null !== $this->masterSlaveServerGroupId) {
            $res['MasterSlaveServerGroupId'] = $this->masterSlaveServerGroupId;
        }
        if (null !== $this->backendServerPort) {
            $res['BackendServerPort'] = $this->backendServerPort;
        }
        if (null !== $this->aclStatus) {
            $res['AclStatus'] = $this->aclStatus;
        }
        if (null !== $this->healthCheckDomain) {
            $res['HealthCheckDomain'] = $this->healthCheckDomain;
        }
        if (null !== $this->unhealthyThreshold) {
            $res['UnhealthyThreshold'] = $this->unhealthyThreshold;
        }
        if (null !== $this->healthCheckHttpCode) {
            $res['HealthCheckHttpCode'] = $this->healthCheckHttpCode;
        }
        if (null !== $this->persistenceTimeout) {
            $res['PersistenceTimeout'] = $this->persistenceTimeout;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->healthCheckInterval) {
            $res['HealthCheckInterval'] = $this->healthCheckInterval;
        }
        if (null !== $this->healthCheckURI) {
            $res['HealthCheckURI'] = $this->healthCheckURI;
        }
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->synProxy) {
            $res['SynProxy'] = $this->synProxy;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }
        if (null !== $this->establishedTimeout) {
            $res['EstablishedTimeout'] = $this->establishedTimeout;
        }
        if (null !== $this->healthCheckConnectTimeout) {
            $res['HealthCheckConnectTimeout'] = $this->healthCheckConnectTimeout;
        }
        if (null !== $this->healthyThreshold) {
            $res['HealthyThreshold'] = $this->healthyThreshold;
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
     * @return DescribeLoadBalancerTCPListenerAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['AclType'])) {
            $model->aclType = $map['AclType'];
        }
        if (isset($map['ConnectionDrainTimeout'])) {
            $model->connectionDrainTimeout = $map['ConnectionDrainTimeout'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HealthCheckConnectPort'])) {
            $model->healthCheckConnectPort = $map['HealthCheckConnectPort'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['HealthCheckType'])) {
            $model->healthCheckType = $map['HealthCheckType'];
        }
        if (isset($map['MasterSlaveServerGroupId'])) {
            $model->masterSlaveServerGroupId = $map['MasterSlaveServerGroupId'];
        }
        if (isset($map['BackendServerPort'])) {
            $model->backendServerPort = $map['BackendServerPort'];
        }
        if (isset($map['AclStatus'])) {
            $model->aclStatus = $map['AclStatus'];
        }
        if (isset($map['HealthCheckDomain'])) {
            $model->healthCheckDomain = $map['HealthCheckDomain'];
        }
        if (isset($map['UnhealthyThreshold'])) {
            $model->unhealthyThreshold = $map['UnhealthyThreshold'];
        }
        if (isset($map['HealthCheckHttpCode'])) {
            $model->healthCheckHttpCode = $map['HealthCheckHttpCode'];
        }
        if (isset($map['PersistenceTimeout'])) {
            $model->persistenceTimeout = $map['PersistenceTimeout'];
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['HealthCheckInterval'])) {
            $model->healthCheckInterval = $map['HealthCheckInterval'];
        }
        if (isset($map['HealthCheckURI'])) {
            $model->healthCheckURI = $map['HealthCheckURI'];
        }
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['SynProxy'])) {
            $model->synProxy = $map['SynProxy'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }
        if (isset($map['EstablishedTimeout'])) {
            $model->establishedTimeout = $map['EstablishedTimeout'];
        }
        if (isset($map['HealthCheckConnectTimeout'])) {
            $model->healthCheckConnectTimeout = $map['HealthCheckConnectTimeout'];
        }
        if (isset($map['HealthyThreshold'])) {
            $model->healthyThreshold = $map['HealthyThreshold'];
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
