<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class CreateLoadBalancerHTTPListenerRequest extends Model
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
    public $bandwidth;

    /**
     * @var int
     */
    public $listenerPort;

    /**
     * @var int
     */
    public $backendServerPort;

    /**
     * @var string
     */
    public $XForwardedFor;

    /**
     * @var string
     */
    public $scheduler;

    /**
     * @var string
     */
    public $stickySession;

    /**
     * @var string
     */
    public $stickySessionType;

    /**
     * @var int
     */
    public $cookieTimeout;

    /**
     * @var string
     */
    public $cookie;

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
    public $healthCheckURI;

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
    public $healthCheckTimeout;

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
    public $healthCheckHttpCode;

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
    public $XForwardedFor_SLBIP;

    /**
     * @var string
     */
    public $XForwardedFor_SLBID;

    /**
     * @var string
     */
    public $XForwardedFor_proto;

    /**
     * @var string
     */
    public $gzip;

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
    public $listenerForward;

    /**
     * @var int
     */
    public $forwardPort;

    /**
     * @var int
     */
    public $idleTimeout;

    /**
     * @var int
     */
    public $requestTimeout;
    protected $_name = [
        'regionId'               => 'RegionId',
        'ownerId'                => 'OwnerId',
        'resourceOwnerAccount'   => 'ResourceOwnerAccount',
        'resourceOwnerId'        => 'ResourceOwnerId',
        'loadBalancerId'         => 'LoadBalancerId',
        'bandwidth'              => 'Bandwidth',
        'listenerPort'           => 'ListenerPort',
        'backendServerPort'      => 'BackendServerPort',
        'XForwardedFor'          => 'XForwardedFor',
        'scheduler'              => 'Scheduler',
        'stickySession'          => 'StickySession',
        'stickySessionType'      => 'StickySessionType',
        'cookieTimeout'          => 'CookieTimeout',
        'cookie'                 => 'Cookie',
        'healthCheck'            => 'HealthCheck',
        'healthCheckDomain'      => 'HealthCheckDomain',
        'healthCheckURI'         => 'HealthCheckURI',
        'healthyThreshold'       => 'HealthyThreshold',
        'unhealthyThreshold'     => 'UnhealthyThreshold',
        'healthCheckTimeout'     => 'HealthCheckTimeout',
        'healthCheckConnectPort' => 'HealthCheckConnectPort',
        'healthCheckInterval'    => 'HealthCheckInterval',
        'healthCheckHttpCode'    => 'HealthCheckHttpCode',
        'ownerAccount'           => 'OwnerAccount',
        'VServerGroupId'         => 'VServerGroupId',
        'XForwardedFor_SLBIP'    => 'XForwardedFor_SLBIP',
        'XForwardedFor_SLBID'    => 'XForwardedFor_SLBID',
        'XForwardedFor_proto'    => 'XForwardedFor_proto',
        'gzip'                   => 'Gzip',
        'aclId'                  => 'AclId',
        'aclType'                => 'AclType',
        'aclStatus'              => 'AclStatus',
        'description'            => 'Description',
        'listenerForward'        => 'ListenerForward',
        'forwardPort'            => 'ForwardPort',
        'idleTimeout'            => 'IdleTimeout',
        'requestTimeout'         => 'RequestTimeout',
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
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->backendServerPort) {
            $res['BackendServerPort'] = $this->backendServerPort;
        }
        if (null !== $this->XForwardedFor) {
            $res['XForwardedFor'] = $this->XForwardedFor;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }
        if (null !== $this->stickySession) {
            $res['StickySession'] = $this->stickySession;
        }
        if (null !== $this->stickySessionType) {
            $res['StickySessionType'] = $this->stickySessionType;
        }
        if (null !== $this->cookieTimeout) {
            $res['CookieTimeout'] = $this->cookieTimeout;
        }
        if (null !== $this->cookie) {
            $res['Cookie'] = $this->cookie;
        }
        if (null !== $this->healthCheck) {
            $res['HealthCheck'] = $this->healthCheck;
        }
        if (null !== $this->healthCheckDomain) {
            $res['HealthCheckDomain'] = $this->healthCheckDomain;
        }
        if (null !== $this->healthCheckURI) {
            $res['HealthCheckURI'] = $this->healthCheckURI;
        }
        if (null !== $this->healthyThreshold) {
            $res['HealthyThreshold'] = $this->healthyThreshold;
        }
        if (null !== $this->unhealthyThreshold) {
            $res['UnhealthyThreshold'] = $this->unhealthyThreshold;
        }
        if (null !== $this->healthCheckTimeout) {
            $res['HealthCheckTimeout'] = $this->healthCheckTimeout;
        }
        if (null !== $this->healthCheckConnectPort) {
            $res['HealthCheckConnectPort'] = $this->healthCheckConnectPort;
        }
        if (null !== $this->healthCheckInterval) {
            $res['HealthCheckInterval'] = $this->healthCheckInterval;
        }
        if (null !== $this->healthCheckHttpCode) {
            $res['HealthCheckHttpCode'] = $this->healthCheckHttpCode;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }
        if (null !== $this->XForwardedFor_SLBIP) {
            $res['XForwardedFor_SLBIP'] = $this->XForwardedFor_SLBIP;
        }
        if (null !== $this->XForwardedFor_SLBID) {
            $res['XForwardedFor_SLBID'] = $this->XForwardedFor_SLBID;
        }
        if (null !== $this->XForwardedFor_proto) {
            $res['XForwardedFor_proto'] = $this->XForwardedFor_proto;
        }
        if (null !== $this->gzip) {
            $res['Gzip'] = $this->gzip;
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
        if (null !== $this->listenerForward) {
            $res['ListenerForward'] = $this->listenerForward;
        }
        if (null !== $this->forwardPort) {
            $res['ForwardPort'] = $this->forwardPort;
        }
        if (null !== $this->idleTimeout) {
            $res['IdleTimeout'] = $this->idleTimeout;
        }
        if (null !== $this->requestTimeout) {
            $res['RequestTimeout'] = $this->requestTimeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLoadBalancerHTTPListenerRequest
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
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['BackendServerPort'])) {
            $model->backendServerPort = $map['BackendServerPort'];
        }
        if (isset($map['XForwardedFor'])) {
            $model->XForwardedFor = $map['XForwardedFor'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }
        if (isset($map['StickySession'])) {
            $model->stickySession = $map['StickySession'];
        }
        if (isset($map['StickySessionType'])) {
            $model->stickySessionType = $map['StickySessionType'];
        }
        if (isset($map['CookieTimeout'])) {
            $model->cookieTimeout = $map['CookieTimeout'];
        }
        if (isset($map['Cookie'])) {
            $model->cookie = $map['Cookie'];
        }
        if (isset($map['HealthCheck'])) {
            $model->healthCheck = $map['HealthCheck'];
        }
        if (isset($map['HealthCheckDomain'])) {
            $model->healthCheckDomain = $map['HealthCheckDomain'];
        }
        if (isset($map['HealthCheckURI'])) {
            $model->healthCheckURI = $map['HealthCheckURI'];
        }
        if (isset($map['HealthyThreshold'])) {
            $model->healthyThreshold = $map['HealthyThreshold'];
        }
        if (isset($map['UnhealthyThreshold'])) {
            $model->unhealthyThreshold = $map['UnhealthyThreshold'];
        }
        if (isset($map['HealthCheckTimeout'])) {
            $model->healthCheckTimeout = $map['HealthCheckTimeout'];
        }
        if (isset($map['HealthCheckConnectPort'])) {
            $model->healthCheckConnectPort = $map['HealthCheckConnectPort'];
        }
        if (isset($map['HealthCheckInterval'])) {
            $model->healthCheckInterval = $map['HealthCheckInterval'];
        }
        if (isset($map['HealthCheckHttpCode'])) {
            $model->healthCheckHttpCode = $map['HealthCheckHttpCode'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }
        if (isset($map['XForwardedFor_SLBIP'])) {
            $model->XForwardedFor_SLBIP = $map['XForwardedFor_SLBIP'];
        }
        if (isset($map['XForwardedFor_SLBID'])) {
            $model->XForwardedFor_SLBID = $map['XForwardedFor_SLBID'];
        }
        if (isset($map['XForwardedFor_proto'])) {
            $model->XForwardedFor_proto = $map['XForwardedFor_proto'];
        }
        if (isset($map['Gzip'])) {
            $model->gzip = $map['Gzip'];
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
        if (isset($map['ListenerForward'])) {
            $model->listenerForward = $map['ListenerForward'];
        }
        if (isset($map['ForwardPort'])) {
            $model->forwardPort = $map['ForwardPort'];
        }
        if (isset($map['IdleTimeout'])) {
            $model->idleTimeout = $map['IdleTimeout'];
        }
        if (isset($map['RequestTimeout'])) {
            $model->requestTimeout = $map['RequestTimeout'];
        }

        return $model;
    }
}
