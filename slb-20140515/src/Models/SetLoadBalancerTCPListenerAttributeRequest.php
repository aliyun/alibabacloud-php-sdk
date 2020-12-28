<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\SetLoadBalancerTCPListenerAttributeRequest\portRange;
use AlibabaCloud\Tea\Model;

class SetLoadBalancerTCPListenerAttributeRequest extends Model
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
    public $healthCheckMethod;

    /**
     * @var string
     */
    public $synProxy;

    /**
     * @var int
     */
    public $maxConnection;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $VServerGroup;

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
    public $masterSlaveServerGroup;

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
    public $vpcIds;

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

    /**
     * @var portRange[]
     */
    public $portRange;
    protected $_name = [
        'regionId'                  => 'RegionId',
        'ownerId'                   => 'OwnerId',
        'resourceOwnerAccount'      => 'ResourceOwnerAccount',
        'resourceOwnerId'           => 'ResourceOwnerId',
        'loadBalancerId'            => 'LoadBalancerId',
        'listenerPort'              => 'ListenerPort',
        'bandwidth'                 => 'Bandwidth',
        'scheduler'                 => 'Scheduler',
        'persistenceTimeout'        => 'PersistenceTimeout',
        'establishedTimeout'        => 'EstablishedTimeout',
        'healthyThreshold'          => 'HealthyThreshold',
        'unhealthyThreshold'        => 'UnhealthyThreshold',
        'healthCheckConnectTimeout' => 'HealthCheckConnectTimeout',
        'healthCheckConnectPort'    => 'HealthCheckConnectPort',
        'healthCheckInterval'       => 'HealthCheckInterval',
        'healthCheckDomain'         => 'HealthCheckDomain',
        'healthCheckURI'            => 'HealthCheckURI',
        'healthCheckHttpCode'       => 'HealthCheckHttpCode',
        'healthCheckType'           => 'HealthCheckType',
        'healthCheckMethod'         => 'HealthCheckMethod',
        'synProxy'                  => 'SynProxy',
        'maxConnection'             => 'MaxConnection',
        'ownerAccount'              => 'OwnerAccount',
        'accessKeyId'               => 'access_key_id',
        'tags'                      => 'Tags',
        'VServerGroup'              => 'VServerGroup',
        'VServerGroupId'            => 'VServerGroupId',
        'masterSlaveServerGroupId'  => 'MasterSlaveServerGroupId',
        'masterSlaveServerGroup'    => 'MasterSlaveServerGroup',
        'aclId'                     => 'AclId',
        'aclType'                   => 'AclType',
        'aclStatus'                 => 'AclStatus',
        'vpcIds'                    => 'VpcIds',
        'description'               => 'Description',
        'connectionDrain'           => 'ConnectionDrain',
        'connectionDrainTimeout'    => 'ConnectionDrainTimeout',
        'portRange'                 => 'PortRange',
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
            $res['HealthCheckInterval'] = $this->healthCheckInterval;
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
        if (null !== $this->healthCheckMethod) {
            $res['HealthCheckMethod'] = $this->healthCheckMethod;
        }
        if (null !== $this->synProxy) {
            $res['SynProxy'] = $this->synProxy;
        }
        if (null !== $this->maxConnection) {
            $res['MaxConnection'] = $this->maxConnection;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->accessKeyId) {
            $res['access_key_id'] = $this->accessKeyId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->VServerGroup) {
            $res['VServerGroup'] = $this->VServerGroup;
        }
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }
        if (null !== $this->masterSlaveServerGroupId) {
            $res['MasterSlaveServerGroupId'] = $this->masterSlaveServerGroupId;
        }
        if (null !== $this->masterSlaveServerGroup) {
            $res['MasterSlaveServerGroup'] = $this->masterSlaveServerGroup;
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
        if (null !== $this->vpcIds) {
            $res['VpcIds'] = $this->vpcIds;
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
        if (null !== $this->portRange) {
            $res['PortRange'] = [];
            if (null !== $this->portRange && \is_array($this->portRange)) {
                $n = 0;
                foreach ($this->portRange as $item) {
                    $res['PortRange'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetLoadBalancerTCPListenerAttributeRequest
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
        if (isset($map['HealthCheckInterval'])) {
            $model->healthCheckInterval = $map['HealthCheckInterval'];
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
        if (isset($map['HealthCheckMethod'])) {
            $model->healthCheckMethod = $map['HealthCheckMethod'];
        }
        if (isset($map['SynProxy'])) {
            $model->synProxy = $map['SynProxy'];
        }
        if (isset($map['MaxConnection'])) {
            $model->maxConnection = $map['MaxConnection'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['access_key_id'])) {
            $model->accessKeyId = $map['access_key_id'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['VServerGroup'])) {
            $model->VServerGroup = $map['VServerGroup'];
        }
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }
        if (isset($map['MasterSlaveServerGroupId'])) {
            $model->masterSlaveServerGroupId = $map['MasterSlaveServerGroupId'];
        }
        if (isset($map['MasterSlaveServerGroup'])) {
            $model->masterSlaveServerGroup = $map['MasterSlaveServerGroup'];
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
        if (isset($map['VpcIds'])) {
            $model->vpcIds = $map['VpcIds'];
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
        if (isset($map['PortRange'])) {
            if (!empty($map['PortRange'])) {
                $model->portRange = [];
                $n                = 0;
                foreach ($map['PortRange'] as $item) {
                    $model->portRange[$n++] = null !== $item ? portRange::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
