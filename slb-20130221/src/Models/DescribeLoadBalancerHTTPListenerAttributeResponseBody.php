<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20130221\Models;

use AlibabaCloud\Dara\Model;

class DescribeLoadBalancerHTTPListenerAttributeResponseBody extends Model
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
    public $gzip;

    /**
     * @var string
     */
    public $healthCheck;

    /**
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @var string
     */
    public $healthCheckHttpCode;

    /**
     * @var int
     */
    public $healthCheckTimeout;

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
     * @var int
     */
    public $maxConnection;

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
    public $securityStatus;

    /**
     * @var string
     */
    public $status;

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
    public $VServerGroupId;

    /**
     * @var string
     */
    public $XForwardedFor;

    /**
     * @var string
     */
    public $XForwardedFor_SLBID;

    /**
     * @var string
     */
    public $XForwardedFor_SLBIP;

    /**
     * @var string
     */
    public $XForwardedFor_proto;
    protected $_name = [
        'backendServerPort' => 'BackendServerPort',
        'bandwidth' => 'Bandwidth',
        'cookie' => 'Cookie',
        'cookieTimeout' => 'CookieTimeout',
        'domain' => 'Domain',
        'gzip' => 'Gzip',
        'healthCheck' => 'HealthCheck',
        'healthCheckConnectPort' => 'HealthCheckConnectPort',
        'healthCheckHttpCode' => 'HealthCheckHttpCode',
        'healthCheckTimeout' => 'HealthCheckTimeout',
        'healthyThreshold' => 'HealthyThreshold',
        'interval' => 'Interval',
        'listenerPort' => 'ListenerPort',
        'maxConnection' => 'MaxConnection',
        'requestId' => 'RequestId',
        'scheduler' => 'Scheduler',
        'securityStatus' => 'SecurityStatus',
        'status' => 'Status',
        'stickySession' => 'StickySession',
        'stickySessionType' => 'StickySessionType',
        'URI' => 'URI',
        'unhealthyThreshold' => 'UnhealthyThreshold',
        'VServerGroupId' => 'VServerGroupId',
        'XForwardedFor' => 'XForwardedFor',
        'XForwardedFor_SLBID' => 'XForwardedFor_SLBID',
        'XForwardedFor_SLBIP' => 'XForwardedFor_SLBIP',
        'XForwardedFor_proto' => 'XForwardedFor_proto',
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

        if (null !== $this->cookie) {
            $res['Cookie'] = $this->cookie;
        }

        if (null !== $this->cookieTimeout) {
            $res['CookieTimeout'] = $this->cookieTimeout;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->gzip) {
            $res['Gzip'] = $this->gzip;
        }

        if (null !== $this->healthCheck) {
            $res['HealthCheck'] = $this->healthCheck;
        }

        if (null !== $this->healthCheckConnectPort) {
            $res['HealthCheckConnectPort'] = $this->healthCheckConnectPort;
        }

        if (null !== $this->healthCheckHttpCode) {
            $res['HealthCheckHttpCode'] = $this->healthCheckHttpCode;
        }

        if (null !== $this->healthCheckTimeout) {
            $res['HealthCheckTimeout'] = $this->healthCheckTimeout;
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

        if (null !== $this->maxConnection) {
            $res['MaxConnection'] = $this->maxConnection;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }

        if (null !== $this->securityStatus) {
            $res['SecurityStatus'] = $this->securityStatus;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }

        if (null !== $this->XForwardedFor) {
            $res['XForwardedFor'] = $this->XForwardedFor;
        }

        if (null !== $this->XForwardedFor_SLBID) {
            $res['XForwardedFor_SLBID'] = $this->XForwardedFor_SLBID;
        }

        if (null !== $this->XForwardedFor_SLBIP) {
            $res['XForwardedFor_SLBIP'] = $this->XForwardedFor_SLBIP;
        }

        if (null !== $this->XForwardedFor_proto) {
            $res['XForwardedFor_proto'] = $this->XForwardedFor_proto;
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

        if (isset($map['Cookie'])) {
            $model->cookie = $map['Cookie'];
        }

        if (isset($map['CookieTimeout'])) {
            $model->cookieTimeout = $map['CookieTimeout'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['Gzip'])) {
            $model->gzip = $map['Gzip'];
        }

        if (isset($map['HealthCheck'])) {
            $model->healthCheck = $map['HealthCheck'];
        }

        if (isset($map['HealthCheckConnectPort'])) {
            $model->healthCheckConnectPort = $map['HealthCheckConnectPort'];
        }

        if (isset($map['HealthCheckHttpCode'])) {
            $model->healthCheckHttpCode = $map['HealthCheckHttpCode'];
        }

        if (isset($map['HealthCheckTimeout'])) {
            $model->healthCheckTimeout = $map['HealthCheckTimeout'];
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

        if (isset($map['MaxConnection'])) {
            $model->maxConnection = $map['MaxConnection'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }

        if (isset($map['SecurityStatus'])) {
            $model->securityStatus = $map['SecurityStatus'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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

        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }

        if (isset($map['XForwardedFor'])) {
            $model->XForwardedFor = $map['XForwardedFor'];
        }

        if (isset($map['XForwardedFor_SLBID'])) {
            $model->XForwardedFor_SLBID = $map['XForwardedFor_SLBID'];
        }

        if (isset($map['XForwardedFor_SLBIP'])) {
            $model->XForwardedFor_SLBIP = $map['XForwardedFor_SLBIP'];
        }

        if (isset($map['XForwardedFor_proto'])) {
            $model->XForwardedFor_proto = $map['XForwardedFor_proto'];
        }

        return $model;
    }
}
