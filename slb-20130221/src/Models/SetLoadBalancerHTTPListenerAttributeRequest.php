<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20130221\Models;

use AlibabaCloud\Dara\Model;

class SetLoadBalancerHTTPListenerAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $cookie;

    /**
     * @var int
     */
    public $cookieTimeout;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $healthCheck;

    /**
     * @var int
     */
    public $healthCheckTimeout;

    /**
     * @var int
     */
    public $healthyThreshold;

    /**
     * @var string
     */
    public $hostId;

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
    public $loadBalancerId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $ownerId;

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
     * @var string
     */
    public $URI;

    /**
     * @var int
     */
    public $unhealthyThreshold;

    /**
     * @var string
     */
    public $XForwardedFor;
    protected $_name = [
        'cookie' => 'Cookie',
        'cookieTimeout' => 'CookieTimeout',
        'domain' => 'Domain',
        'healthCheck' => 'HealthCheck',
        'healthCheckTimeout' => 'HealthCheckTimeout',
        'healthyThreshold' => 'HealthyThreshold',
        'hostId' => 'HostId',
        'interval' => 'Interval',
        'listenerPort' => 'ListenerPort',
        'loadBalancerId' => 'LoadBalancerId',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'scheduler' => 'Scheduler',
        'stickySession' => 'StickySession',
        'stickySessionType' => 'StickySessionType',
        'URI' => 'URI',
        'unhealthyThreshold' => 'UnhealthyThreshold',
        'XForwardedFor' => 'XForwardedFor',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cookie) {
            $res['Cookie'] = $this->cookie;
        }

        if (null !== $this->cookieTimeout) {
            $res['CookieTimeout'] = $this->cookieTimeout;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->healthCheck) {
            $res['HealthCheck'] = $this->healthCheck;
        }

        if (null !== $this->healthCheckTimeout) {
            $res['HealthCheckTimeout'] = $this->healthCheckTimeout;
        }

        if (null !== $this->healthyThreshold) {
            $res['HealthyThreshold'] = $this->healthyThreshold;
        }

        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }

        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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

        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }

        if (null !== $this->unhealthyThreshold) {
            $res['UnhealthyThreshold'] = $this->unhealthyThreshold;
        }

        if (null !== $this->XForwardedFor) {
            $res['XForwardedFor'] = $this->XForwardedFor;
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
        if (isset($map['Cookie'])) {
            $model->cookie = $map['Cookie'];
        }

        if (isset($map['CookieTimeout'])) {
            $model->cookieTimeout = $map['CookieTimeout'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['HealthCheck'])) {
            $model->healthCheck = $map['HealthCheck'];
        }

        if (isset($map['HealthCheckTimeout'])) {
            $model->healthCheckTimeout = $map['HealthCheckTimeout'];
        }

        if (isset($map['HealthyThreshold'])) {
            $model->healthyThreshold = $map['HealthyThreshold'];
        }

        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }

        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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

        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        if (isset($map['UnhealthyThreshold'])) {
            $model->unhealthyThreshold = $map['UnhealthyThreshold'];
        }

        if (isset($map['XForwardedFor'])) {
            $model->XForwardedFor = $map['XForwardedFor'];
        }

        return $model;
    }
}
