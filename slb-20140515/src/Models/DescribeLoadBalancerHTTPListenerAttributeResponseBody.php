<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerHTTPListenerAttributeResponseBody\rules;
use AlibabaCloud\Tea\Model;

class DescribeLoadBalancerHTTPListenerAttributeResponseBody extends Model
{
    /**
     * @var int
     */
    public $cookieTimeout;

    /**
     * @var string
     */
    public $VServerGroupId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $unhealthyThreshold;

    /**
     * @var string
     */
    public $healthCheckURI;

    /**
     * @var string
     */
    public $scheduler;

    /**
     * @var string
     */
    public $healthCheck;

    /**
     * @var int
     */
    public $idleTimeout;

    /**
     * @var int
     */
    public $backendServerPort;

    /**
     * @var string
     */
    public $XForwardedFor_SLBID;

    /**
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $securityStatus;

    /**
     * @var string
     */
    public $gzip;

    /**
     * @var string
     */
    public $stickySessionType;

    /**
     * @var string
     */
    public $XForwardedFor_SLBIP;

    /**
     * @var string
     */
    public $healthCheckHttpCode;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $cookie;

    /**
     * @var int
     */
    public $requestTimeout;

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
    public $requestId;

    /**
     * @var string
     */
    public $aclId;

    /**
     * @var int
     */
    public $healthCheckTimeout;

    /**
     * @var rules
     */
    public $rules;

    /**
     * @var string
     */
    public $listenerForward;

    /**
     * @var string
     */
    public $stickySession;

    /**
     * @var string
     */
    public $aclStatus;

    /**
     * @var int
     */
    public $forwardPort;

    /**
     * @var int
     */
    public $healthyThreshold;

    /**
     * @var string
     */
    public $XForwardedFor;

    /**
     * @var string
     */
    public $healthCheckDomain;

    /**
     * @var string
     */
    public $aclType;

    /**
     * @var string
     */
    public $XForwardedFor_proto;
    protected $_name = [
        'cookieTimeout'          => 'CookieTimeout',
        'VServerGroupId'         => 'VServerGroupId',
        'description'            => 'Description',
        'unhealthyThreshold'     => 'UnhealthyThreshold',
        'healthCheckURI'         => 'HealthCheckURI',
        'scheduler'              => 'Scheduler',
        'healthCheck'            => 'HealthCheck',
        'idleTimeout'            => 'IdleTimeout',
        'backendServerPort'      => 'BackendServerPort',
        'XForwardedFor_SLBID'    => 'XForwardedFor_SLBID',
        'healthCheckConnectPort' => 'HealthCheckConnectPort',
        'bandwidth'              => 'Bandwidth',
        'securityStatus'         => 'SecurityStatus',
        'gzip'                   => 'Gzip',
        'stickySessionType'      => 'StickySessionType',
        'XForwardedFor_SLBIP'    => 'XForwardedFor_SLBIP',
        'healthCheckHttpCode'    => 'HealthCheckHttpCode',
        'status'                 => 'Status',
        'cookie'                 => 'Cookie',
        'requestTimeout'         => 'RequestTimeout',
        'listenerPort'           => 'ListenerPort',
        'healthCheckInterval'    => 'HealthCheckInterval',
        'requestId'              => 'RequestId',
        'aclId'                  => 'AclId',
        'healthCheckTimeout'     => 'HealthCheckTimeout',
        'rules'                  => 'Rules',
        'listenerForward'        => 'ListenerForward',
        'stickySession'          => 'StickySession',
        'aclStatus'              => 'AclStatus',
        'forwardPort'            => 'ForwardPort',
        'healthyThreshold'       => 'HealthyThreshold',
        'XForwardedFor'          => 'XForwardedFor',
        'healthCheckDomain'      => 'HealthCheckDomain',
        'aclType'                => 'AclType',
        'XForwardedFor_proto'    => 'XForwardedFor_proto',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cookieTimeout) {
            $res['CookieTimeout'] = $this->cookieTimeout;
        }
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->unhealthyThreshold) {
            $res['UnhealthyThreshold'] = $this->unhealthyThreshold;
        }
        if (null !== $this->healthCheckURI) {
            $res['HealthCheckURI'] = $this->healthCheckURI;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }
        if (null !== $this->healthCheck) {
            $res['HealthCheck'] = $this->healthCheck;
        }
        if (null !== $this->idleTimeout) {
            $res['IdleTimeout'] = $this->idleTimeout;
        }
        if (null !== $this->backendServerPort) {
            $res['BackendServerPort'] = $this->backendServerPort;
        }
        if (null !== $this->XForwardedFor_SLBID) {
            $res['XForwardedFor_SLBID'] = $this->XForwardedFor_SLBID;
        }
        if (null !== $this->healthCheckConnectPort) {
            $res['HealthCheckConnectPort'] = $this->healthCheckConnectPort;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->securityStatus) {
            $res['SecurityStatus'] = $this->securityStatus;
        }
        if (null !== $this->gzip) {
            $res['Gzip'] = $this->gzip;
        }
        if (null !== $this->stickySessionType) {
            $res['StickySessionType'] = $this->stickySessionType;
        }
        if (null !== $this->XForwardedFor_SLBIP) {
            $res['XForwardedFor_SLBIP'] = $this->XForwardedFor_SLBIP;
        }
        if (null !== $this->healthCheckHttpCode) {
            $res['HealthCheckHttpCode'] = $this->healthCheckHttpCode;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->cookie) {
            $res['Cookie'] = $this->cookie;
        }
        if (null !== $this->requestTimeout) {
            $res['RequestTimeout'] = $this->requestTimeout;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->healthCheckInterval) {
            $res['HealthCheckInterval'] = $this->healthCheckInterval;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->healthCheckTimeout) {
            $res['HealthCheckTimeout'] = $this->healthCheckTimeout;
        }
        if (null !== $this->rules) {
            $res['Rules'] = null !== $this->rules ? $this->rules->toMap() : null;
        }
        if (null !== $this->listenerForward) {
            $res['ListenerForward'] = $this->listenerForward;
        }
        if (null !== $this->stickySession) {
            $res['StickySession'] = $this->stickySession;
        }
        if (null !== $this->aclStatus) {
            $res['AclStatus'] = $this->aclStatus;
        }
        if (null !== $this->forwardPort) {
            $res['ForwardPort'] = $this->forwardPort;
        }
        if (null !== $this->healthyThreshold) {
            $res['HealthyThreshold'] = $this->healthyThreshold;
        }
        if (null !== $this->XForwardedFor) {
            $res['XForwardedFor'] = $this->XForwardedFor;
        }
        if (null !== $this->healthCheckDomain) {
            $res['HealthCheckDomain'] = $this->healthCheckDomain;
        }
        if (null !== $this->aclType) {
            $res['AclType'] = $this->aclType;
        }
        if (null !== $this->XForwardedFor_proto) {
            $res['XForwardedFor_proto'] = $this->XForwardedFor_proto;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLoadBalancerHTTPListenerAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CookieTimeout'])) {
            $model->cookieTimeout = $map['CookieTimeout'];
        }
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['UnhealthyThreshold'])) {
            $model->unhealthyThreshold = $map['UnhealthyThreshold'];
        }
        if (isset($map['HealthCheckURI'])) {
            $model->healthCheckURI = $map['HealthCheckURI'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }
        if (isset($map['HealthCheck'])) {
            $model->healthCheck = $map['HealthCheck'];
        }
        if (isset($map['IdleTimeout'])) {
            $model->idleTimeout = $map['IdleTimeout'];
        }
        if (isset($map['BackendServerPort'])) {
            $model->backendServerPort = $map['BackendServerPort'];
        }
        if (isset($map['XForwardedFor_SLBID'])) {
            $model->XForwardedFor_SLBID = $map['XForwardedFor_SLBID'];
        }
        if (isset($map['HealthCheckConnectPort'])) {
            $model->healthCheckConnectPort = $map['HealthCheckConnectPort'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['SecurityStatus'])) {
            $model->securityStatus = $map['SecurityStatus'];
        }
        if (isset($map['Gzip'])) {
            $model->gzip = $map['Gzip'];
        }
        if (isset($map['StickySessionType'])) {
            $model->stickySessionType = $map['StickySessionType'];
        }
        if (isset($map['XForwardedFor_SLBIP'])) {
            $model->XForwardedFor_SLBIP = $map['XForwardedFor_SLBIP'];
        }
        if (isset($map['HealthCheckHttpCode'])) {
            $model->healthCheckHttpCode = $map['HealthCheckHttpCode'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Cookie'])) {
            $model->cookie = $map['Cookie'];
        }
        if (isset($map['RequestTimeout'])) {
            $model->requestTimeout = $map['RequestTimeout'];
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['HealthCheckInterval'])) {
            $model->healthCheckInterval = $map['HealthCheckInterval'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['HealthCheckTimeout'])) {
            $model->healthCheckTimeout = $map['HealthCheckTimeout'];
        }
        if (isset($map['Rules'])) {
            $model->rules = rules::fromMap($map['Rules']);
        }
        if (isset($map['ListenerForward'])) {
            $model->listenerForward = $map['ListenerForward'];
        }
        if (isset($map['StickySession'])) {
            $model->stickySession = $map['StickySession'];
        }
        if (isset($map['AclStatus'])) {
            $model->aclStatus = $map['AclStatus'];
        }
        if (isset($map['ForwardPort'])) {
            $model->forwardPort = $map['ForwardPort'];
        }
        if (isset($map['HealthyThreshold'])) {
            $model->healthyThreshold = $map['HealthyThreshold'];
        }
        if (isset($map['XForwardedFor'])) {
            $model->XForwardedFor = $map['XForwardedFor'];
        }
        if (isset($map['HealthCheckDomain'])) {
            $model->healthCheckDomain = $map['HealthCheckDomain'];
        }
        if (isset($map['AclType'])) {
            $model->aclType = $map['AclType'];
        }
        if (isset($map['XForwardedFor_proto'])) {
            $model->XForwardedFor_proto = $map['XForwardedFor_proto'];
        }

        return $model;
    }
}
