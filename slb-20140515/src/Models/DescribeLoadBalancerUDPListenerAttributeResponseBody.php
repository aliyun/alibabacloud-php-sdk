<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class DescribeLoadBalancerUDPListenerAttributeResponseBody extends Model
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
     * @var int
     */
    public $unhealthyThreshold;

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
    public $healthCheckExp;

    /**
     * @var string
     */
    public $aclId;

    /**
     * @var string
     */
    public $scheduler;

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
    public $healthCheckReq;

    /**
     * @var string
     */
    public $healthCheck;
    protected $_name = [
        'VServerGroupId'            => 'VServerGroupId',
        'status'                    => 'Status',
        'aclType'                   => 'AclType',
        'requestId'                 => 'RequestId',
        'healthCheckConnectPort'    => 'HealthCheckConnectPort',
        'description'               => 'Description',
        'bandwidth'                 => 'Bandwidth',
        'masterSlaveServerGroupId'  => 'MasterSlaveServerGroupId',
        'backendServerPort'         => 'BackendServerPort',
        'aclStatus'                 => 'AclStatus',
        'unhealthyThreshold'        => 'UnhealthyThreshold',
        'listenerPort'              => 'ListenerPort',
        'healthCheckInterval'       => 'HealthCheckInterval',
        'healthCheckExp'            => 'HealthCheckExp',
        'aclId'                     => 'AclId',
        'scheduler'                 => 'Scheduler',
        'healthCheckConnectTimeout' => 'HealthCheckConnectTimeout',
        'healthyThreshold'          => 'HealthyThreshold',
        'healthCheckReq'            => 'HealthCheckReq',
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
        if (null !== $this->masterSlaveServerGroupId) {
            $res['MasterSlaveServerGroupId'] = $this->masterSlaveServerGroupId;
        }
        if (null !== $this->backendServerPort) {
            $res['BackendServerPort'] = $this->backendServerPort;
        }
        if (null !== $this->aclStatus) {
            $res['AclStatus'] = $this->aclStatus;
        }
        if (null !== $this->unhealthyThreshold) {
            $res['UnhealthyThreshold'] = $this->unhealthyThreshold;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->healthCheckInterval) {
            $res['HealthCheckInterval'] = $this->healthCheckInterval;
        }
        if (null !== $this->healthCheckExp) {
            $res['HealthCheckExp'] = $this->healthCheckExp;
        }
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }
        if (null !== $this->healthCheckConnectTimeout) {
            $res['HealthCheckConnectTimeout'] = $this->healthCheckConnectTimeout;
        }
        if (null !== $this->healthyThreshold) {
            $res['HealthyThreshold'] = $this->healthyThreshold;
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
     * @return DescribeLoadBalancerUDPListenerAttributeResponseBody
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
        if (isset($map['MasterSlaveServerGroupId'])) {
            $model->masterSlaveServerGroupId = $map['MasterSlaveServerGroupId'];
        }
        if (isset($map['BackendServerPort'])) {
            $model->backendServerPort = $map['BackendServerPort'];
        }
        if (isset($map['AclStatus'])) {
            $model->aclStatus = $map['AclStatus'];
        }
        if (isset($map['UnhealthyThreshold'])) {
            $model->unhealthyThreshold = $map['UnhealthyThreshold'];
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['HealthCheckInterval'])) {
            $model->healthCheckInterval = $map['HealthCheckInterval'];
        }
        if (isset($map['HealthCheckExp'])) {
            $model->healthCheckExp = $map['HealthCheckExp'];
        }
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }
        if (isset($map['HealthCheckConnectTimeout'])) {
            $model->healthCheckConnectTimeout = $map['HealthCheckConnectTimeout'];
        }
        if (isset($map['HealthyThreshold'])) {
            $model->healthyThreshold = $map['HealthyThreshold'];
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
