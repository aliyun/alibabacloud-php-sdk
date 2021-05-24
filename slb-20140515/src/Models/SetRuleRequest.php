<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class SetRuleRequest extends Model
{
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
    public $regionId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $VServerGroupId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $listenerSync;

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
    public $healthCheckInterval;

    /**
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @var string
     */
    public $healthCheckHttpCode;
    protected $_name = [
        'ownerId'                => 'OwnerId',
        'resourceOwnerAccount'   => 'ResourceOwnerAccount',
        'resourceOwnerId'        => 'ResourceOwnerId',
        'regionId'               => 'RegionId',
        'ownerAccount'           => 'OwnerAccount',
        'ruleId'                 => 'RuleId',
        'VServerGroupId'         => 'VServerGroupId',
        'ruleName'               => 'RuleName',
        'listenerSync'           => 'ListenerSync',
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
        'healthCheckInterval'    => 'HealthCheckInterval',
        'healthCheckConnectPort' => 'HealthCheckConnectPort',
        'healthCheckHttpCode'    => 'HealthCheckHttpCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->listenerSync) {
            $res['ListenerSync'] = $this->listenerSync;
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
        if (null !== $this->healthCheckInterval) {
            $res['HealthCheckInterval'] = $this->healthCheckInterval;
        }
        if (null !== $this->healthCheckConnectPort) {
            $res['HealthCheckConnectPort'] = $this->healthCheckConnectPort;
        }
        if (null !== $this->healthCheckHttpCode) {
            $res['HealthCheckHttpCode'] = $this->healthCheckHttpCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['ListenerSync'])) {
            $model->listenerSync = $map['ListenerSync'];
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
        if (isset($map['HealthCheckInterval'])) {
            $model->healthCheckInterval = $map['HealthCheckInterval'];
        }
        if (isset($map['HealthCheckConnectPort'])) {
            $model->healthCheckConnectPort = $map['HealthCheckConnectPort'];
        }
        if (isset($map['HealthCheckHttpCode'])) {
            $model->healthCheckHttpCode = $map['HealthCheckHttpCode'];
        }

        return $model;
    }
}
