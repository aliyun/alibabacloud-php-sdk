<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class CreateLoadBalancerTCPListenerRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var int
     */
    public $listenerPort;

    /**
     * @var int
     */
    public $backendServerPort;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $scheduler;

    /**
     * @var int
     */
    public $persistenceTimeout;

    /**
     * @var int
     */
    public $establishedTimeout;

    /**
     * @var int
     */
    public $healthyThreshold;

    /**
     * @var int
     */
    public $unhealthyThreshold;

    /**
     * @var int
     */
    public $healthCheckConnectTimeout;

    /**
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @var string
     */
    public $healthCheckDomain;

    /**
     * @var string
     */
    public $healthCheckURI;

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
    public $ownerAccount;

    /**
     * @var string
     */
    public $VServerGroupId;

    /**
     * @var string
     */
    public $masterSlaveServerGroupId;

    /**
     * @var string
     */
    public $aclId;

    /**
     * @var string
     */
    public $aclType;

    /**
     * @var string
     */
    public $aclStatus;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $connectionDrain;

    /**
     * @var int
     */
    public $connectionDrainTimeout;
    protected $_name = [
        'regionId'                  => 'RegionId',
        'ownerId'                   => 'OwnerId',
        'resourceOwnerAccount'      => 'ResourceOwnerAccount',
        'resourceOwnerId'           => 'ResourceOwnerId',
        'loadBalancerId'            => 'LoadBalancerId',
        'listenerPort'              => 'ListenerPort',
        'backendServerPort'         => 'BackendServerPort',
        'bandwidth'                 => 'Bandwidth',
        'scheduler'                 => 'Scheduler',
        'persistenceTimeout'        => 'PersistenceTimeout',
        'establishedTimeout'        => 'EstablishedTimeout',
        'healthyThreshold'          => 'HealthyThreshold',
        'unhealthyThreshold'        => 'UnhealthyThreshold',
        'healthCheckConnectTimeout' => 'HealthCheckConnectTimeout',
        'healthCheckConnectPort'    => 'HealthCheckConnectPort',
        'healthCheckInterval'       => 'healthCheckInterval',
        'healthCheckDomain'         => 'HealthCheckDomain',
        'healthCheckURI'            => 'HealthCheckURI',
        'healthCheckHttpCode'       => 'HealthCheckHttpCode',
        'healthCheckType'           => 'HealthCheckType',
        'ownerAccount'              => 'OwnerAccount',
        'VServerGroupId'            => 'VServerGroupId',
        'masterSlaveServerGroupId'  => 'MasterSlaveServerGroupId',
        'aclId'                     => 'AclId',
        'aclType'                   => 'AclType',
        'aclStatus'                 => 'AclStatus',
        'description'               => 'Description',
        'connectionDrain'           => 'ConnectionDrain',
        'connectionDrainTimeout'    => 'ConnectionDrainTimeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->backendServerPort) {
            $res['BackendServerPort'] = $this->backendServerPort;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }
        if (null !== $this->persistenceTimeout) {
            $res['PersistenceTimeout'] = $this->persistenceTimeout;
        }
        if (null !== $this->establishedTimeout) {
            $res['EstablishedTimeout'] = $this->establishedTimeout;
        }
        if (null !== $this->healthyThreshold) {
            $res['HealthyThreshold'] = $this->healthyThreshold;
        }
        if (null !== $this->unhealthyThreshold) {
            $res['UnhealthyThreshold'] = $this->unhealthyThreshold;
        }
        if (null !== $this->healthCheckConnectTimeout) {
            $res['HealthCheckConnectTimeout'] = $this->healthCheckConnectTimeout;
        }
        if (null !== $this->healthCheckConnectPort) {
            $res['HealthCheckConnectPort'] = $this->healthCheckConnectPort;
        }
        if (null !== $this->healthCheckInterval) {
            $res['healthCheckInterval'] = $this->healthCheckInterval;
        }
        if (null !== $this->healthCheckDomain) {
            $res['HealthCheckDomain'] = $this->healthCheckDomain;
        }
        if (null !== $this->healthCheckURI) {
            $res['HealthCheckURI'] = $this->healthCheckURI;
        }
        if (null !== $this->healthCheckHttpCode) {
            $res['HealthCheckHttpCode'] = $this->healthCheckHttpCode;
        }
        if (null !== $this->healthCheckType) {
            $res['HealthCheckType'] = $this->healthCheckType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }
        if (null !== $this->masterSlaveServerGroupId) {
            $res['MasterSlaveServerGroupId'] = $this->masterSlaveServerGroupId;
        }
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->aclType) {
            $res['AclType'] = $this->aclType;
        }
        if (null !== $this->aclStatus) {
            $res['AclStatus'] = $this->aclStatus;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->connectionDrain) {
            $res['ConnectionDrain'] = $this->connectionDrain;
        }
        if (null !== $this->connectionDrainTimeout) {
            $res['ConnectionDrainTimeout'] = $this->connectionDrainTimeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLoadBalancerTCPListenerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['BackendServerPort'])) {
            $model->backendServerPort = $map['BackendServerPort'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }
        if (isset($map['PersistenceTimeout'])) {
            $model->persistenceTimeout = $map['PersistenceTimeout'];
        }
        if (isset($map['EstablishedTimeout'])) {
            $model->establishedTimeout = $map['EstablishedTimeout'];
        }
        if (isset($map['HealthyThreshold'])) {
            $model->healthyThreshold = $map['HealthyThreshold'];
        }
        if (isset($map['UnhealthyThreshold'])) {
            $model->unhealthyThreshold = $map['UnhealthyThreshold'];
        }
        if (isset($map['HealthCheckConnectTimeout'])) {
            $model->healthCheckConnectTimeout = $map['HealthCheckConnectTimeout'];
        }
        if (isset($map['HealthCheckConnectPort'])) {
            $model->healthCheckConnectPort = $map['HealthCheckConnectPort'];
        }
        if (isset($map['healthCheckInterval'])) {
            $model->healthCheckInterval = $map['healthCheckInterval'];
        }
        if (isset($map['HealthCheckDomain'])) {
            $model->healthCheckDomain = $map['HealthCheckDomain'];
        }
        if (isset($map['HealthCheckURI'])) {
            $model->healthCheckURI = $map['HealthCheckURI'];
        }
        if (isset($map['HealthCheckHttpCode'])) {
            $model->healthCheckHttpCode = $map['HealthCheckHttpCode'];
        }
        if (isset($map['HealthCheckType'])) {
            $model->healthCheckType = $map['HealthCheckType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }
        if (isset($map['MasterSlaveServerGroupId'])) {
            $model->masterSlaveServerGroupId = $map['MasterSlaveServerGroupId'];
        }
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['AclType'])) {
            $model->aclType = $map['AclType'];
        }
        if (isset($map['AclStatus'])) {
            $model->aclStatus = $map['AclStatus'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ConnectionDrain'])) {
            $model->connectionDrain = $map['ConnectionDrain'];
        }
        if (isset($map['ConnectionDrainTimeout'])) {
            $model->connectionDrainTimeout = $map['ConnectionDrainTimeout'];
        }

        return $model;
    }
}
