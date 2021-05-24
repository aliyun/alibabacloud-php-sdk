<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerListenersResponseBody\listeners;

use AlibabaCloud\Tea\Model;

class HTTPListenerConfig extends Model
{
    /**
     * @var string
     */
    public $healthCheckHttpVersion;

    /**
     * @var string
     */
    public $XForwardedFor_ClientSrcPort;

    /**
     * @var string
     */
    public $cookie;

    /**
     * @var string
     */
    public $gzip;

    /**
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @var int
     */
    public $healthCheckTimeout;

    /**
     * @var string
     */
    public $healthCheckType;

    /**
     * @var int
     */
    public $cookieTimeout;

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
    public $XForwardedFor_SLBID;

    /**
     * @var int
     */
    public $forwardPort;

    /**
     * @var string
     */
    public $healthCheckHttpCode;

    /**
     * @var string
     */
    public $listenerForward;

    /**
     * @var string
     */
    public $XForwardedFor;

    /**
     * @var int
     */
    public $idleTimeout;

    /**
     * @var int
     */
    public $requestTimeout;

    /**
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @var string
     */
    public $XForwardedFor_SLBPORT;

    /**
     * @var string
     */
    public $healthCheckURI;

    /**
     * @var string
     */
    public $stickySessionType;

    /**
     * @var int
     */
    public $healthyThreshold;

    /**
     * @var string
     */
    public $XForwardedFor_proto;

    /**
     * @var string
     */
    public $XForwardedFor_SLBIP;

    /**
     * @var string
     */
    public $stickySession;

    /**
     * @var string
     */
    public $healthCheckMethod;

    /**
     * @var string
     */
    public $healthCheck;
    protected $_name = [
        'healthCheckHttpVersion'      => 'HealthCheckHttpVersion',
        'XForwardedFor_ClientSrcPort' => 'XForwardedFor_ClientSrcPort',
        'cookie'                      => 'Cookie',
        'gzip'                        => 'Gzip',
        'healthCheckConnectPort'      => 'HealthCheckConnectPort',
        'healthCheckTimeout'          => 'HealthCheckTimeout',
        'healthCheckType'             => 'HealthCheckType',
        'cookieTimeout'               => 'CookieTimeout',
        'healthCheckDomain'           => 'HealthCheckDomain',
        'unhealthyThreshold'          => 'UnhealthyThreshold',
        'XForwardedFor_SLBID'         => 'XForwardedFor_SLBID',
        'forwardPort'                 => 'ForwardPort',
        'healthCheckHttpCode'         => 'HealthCheckHttpCode',
        'listenerForward'             => 'ListenerForward',
        'XForwardedFor'               => 'XForwardedFor',
        'idleTimeout'                 => 'IdleTimeout',
        'requestTimeout'              => 'RequestTimeout',
        'healthCheckInterval'         => 'HealthCheckInterval',
        'XForwardedFor_SLBPORT'       => 'XForwardedFor_SLBPORT',
        'healthCheckURI'              => 'HealthCheckURI',
        'stickySessionType'           => 'StickySessionType',
        'healthyThreshold'            => 'HealthyThreshold',
        'XForwardedFor_proto'         => 'XForwardedFor_proto',
        'XForwardedFor_SLBIP'         => 'XForwardedFor_SLBIP',
        'stickySession'               => 'StickySession',
        'healthCheckMethod'           => 'HealthCheckMethod',
        'healthCheck'                 => 'HealthCheck',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->healthCheckHttpVersion) {
            $res['HealthCheckHttpVersion'] = $this->healthCheckHttpVersion;
        }
        if (null !== $this->XForwardedFor_ClientSrcPort) {
            $res['XForwardedFor_ClientSrcPort'] = $this->XForwardedFor_ClientSrcPort;
        }
        if (null !== $this->cookie) {
            $res['Cookie'] = $this->cookie;
        }
        if (null !== $this->gzip) {
            $res['Gzip'] = $this->gzip;
        }
        if (null !== $this->healthCheckConnectPort) {
            $res['HealthCheckConnectPort'] = $this->healthCheckConnectPort;
        }
        if (null !== $this->healthCheckTimeout) {
            $res['HealthCheckTimeout'] = $this->healthCheckTimeout;
        }
        if (null !== $this->healthCheckType) {
            $res['HealthCheckType'] = $this->healthCheckType;
        }
        if (null !== $this->cookieTimeout) {
            $res['CookieTimeout'] = $this->cookieTimeout;
        }
        if (null !== $this->healthCheckDomain) {
            $res['HealthCheckDomain'] = $this->healthCheckDomain;
        }
        if (null !== $this->unhealthyThreshold) {
            $res['UnhealthyThreshold'] = $this->unhealthyThreshold;
        }
        if (null !== $this->XForwardedFor_SLBID) {
            $res['XForwardedFor_SLBID'] = $this->XForwardedFor_SLBID;
        }
        if (null !== $this->forwardPort) {
            $res['ForwardPort'] = $this->forwardPort;
        }
        if (null !== $this->healthCheckHttpCode) {
            $res['HealthCheckHttpCode'] = $this->healthCheckHttpCode;
        }
        if (null !== $this->listenerForward) {
            $res['ListenerForward'] = $this->listenerForward;
        }
        if (null !== $this->XForwardedFor) {
            $res['XForwardedFor'] = $this->XForwardedFor;
        }
        if (null !== $this->idleTimeout) {
            $res['IdleTimeout'] = $this->idleTimeout;
        }
        if (null !== $this->requestTimeout) {
            $res['RequestTimeout'] = $this->requestTimeout;
        }
        if (null !== $this->healthCheckInterval) {
            $res['HealthCheckInterval'] = $this->healthCheckInterval;
        }
        if (null !== $this->XForwardedFor_SLBPORT) {
            $res['XForwardedFor_SLBPORT'] = $this->XForwardedFor_SLBPORT;
        }
        if (null !== $this->healthCheckURI) {
            $res['HealthCheckURI'] = $this->healthCheckURI;
        }
        if (null !== $this->stickySessionType) {
            $res['StickySessionType'] = $this->stickySessionType;
        }
        if (null !== $this->healthyThreshold) {
            $res['HealthyThreshold'] = $this->healthyThreshold;
        }
        if (null !== $this->XForwardedFor_proto) {
            $res['XForwardedFor_proto'] = $this->XForwardedFor_proto;
        }
        if (null !== $this->XForwardedFor_SLBIP) {
            $res['XForwardedFor_SLBIP'] = $this->XForwardedFor_SLBIP;
        }
        if (null !== $this->stickySession) {
            $res['StickySession'] = $this->stickySession;
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
     * @return HTTPListenerConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HealthCheckHttpVersion'])) {
            $model->healthCheckHttpVersion = $map['HealthCheckHttpVersion'];
        }
        if (isset($map['XForwardedFor_ClientSrcPort'])) {
            $model->XForwardedFor_ClientSrcPort = $map['XForwardedFor_ClientSrcPort'];
        }
        if (isset($map['Cookie'])) {
            $model->cookie = $map['Cookie'];
        }
        if (isset($map['Gzip'])) {
            $model->gzip = $map['Gzip'];
        }
        if (isset($map['HealthCheckConnectPort'])) {
            $model->healthCheckConnectPort = $map['HealthCheckConnectPort'];
        }
        if (isset($map['HealthCheckTimeout'])) {
            $model->healthCheckTimeout = $map['HealthCheckTimeout'];
        }
        if (isset($map['HealthCheckType'])) {
            $model->healthCheckType = $map['HealthCheckType'];
        }
        if (isset($map['CookieTimeout'])) {
            $model->cookieTimeout = $map['CookieTimeout'];
        }
        if (isset($map['HealthCheckDomain'])) {
            $model->healthCheckDomain = $map['HealthCheckDomain'];
        }
        if (isset($map['UnhealthyThreshold'])) {
            $model->unhealthyThreshold = $map['UnhealthyThreshold'];
        }
        if (isset($map['XForwardedFor_SLBID'])) {
            $model->XForwardedFor_SLBID = $map['XForwardedFor_SLBID'];
        }
        if (isset($map['ForwardPort'])) {
            $model->forwardPort = $map['ForwardPort'];
        }
        if (isset($map['HealthCheckHttpCode'])) {
            $model->healthCheckHttpCode = $map['HealthCheckHttpCode'];
        }
        if (isset($map['ListenerForward'])) {
            $model->listenerForward = $map['ListenerForward'];
        }
        if (isset($map['XForwardedFor'])) {
            $model->XForwardedFor = $map['XForwardedFor'];
        }
        if (isset($map['IdleTimeout'])) {
            $model->idleTimeout = $map['IdleTimeout'];
        }
        if (isset($map['RequestTimeout'])) {
            $model->requestTimeout = $map['RequestTimeout'];
        }
        if (isset($map['HealthCheckInterval'])) {
            $model->healthCheckInterval = $map['HealthCheckInterval'];
        }
        if (isset($map['XForwardedFor_SLBPORT'])) {
            $model->XForwardedFor_SLBPORT = $map['XForwardedFor_SLBPORT'];
        }
        if (isset($map['HealthCheckURI'])) {
            $model->healthCheckURI = $map['HealthCheckURI'];
        }
        if (isset($map['StickySessionType'])) {
            $model->stickySessionType = $map['StickySessionType'];
        }
        if (isset($map['HealthyThreshold'])) {
            $model->healthyThreshold = $map['HealthyThreshold'];
        }
        if (isset($map['XForwardedFor_proto'])) {
            $model->XForwardedFor_proto = $map['XForwardedFor_proto'];
        }
        if (isset($map['XForwardedFor_SLBIP'])) {
            $model->XForwardedFor_SLBIP = $map['XForwardedFor_SLBIP'];
        }
        if (isset($map['StickySession'])) {
            $model->stickySession = $map['StickySession'];
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
