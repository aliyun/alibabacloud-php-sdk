<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateLoadBalancerHTTPSListenerRequest extends Model
{
    /**
     * @example example
     *
     * @var string
     */
    public $cookie;

    /**
     * @example 100
     *
     * @var int
     */
    public $cookieTimeout;

    /**
     * @example 监听说明
     *
     * @var string
     */
    public $description;

    /**
     * @example 0
     *
     * @var int
     */
    public $forwardPort;

    /**
     * @example on
     *
     * @var string
     */
    public $healthCheck;

    /**
     * @example 11
     *
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @example example.com
     *
     * @var string
     */
    public $healthCheckDomain;

    /**
     * @example http_2xx
     *
     * @var string
     */
    public $healthCheckHttpCode;

    /**
     * @example 2
     *
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @example head
     *
     * @var string
     */
    public $healthCheckMethod;

    /**
     * @example 5
     *
     * @var int
     */
    public $healthCheckTimeout;

    /**
     * @example /checkpreload.htm
     *
     * @var string
     */
    public $healthCheckURI;

    /**
     * @example 3
     *
     * @var int
     */
    public $healthyThreshold;

    /**
     * @example 15
     *
     * @var int
     */
    public $idleTimeout;

    /**
     * @example off
     *
     * @var string
     */
    public $listenerForward;

    /**
     * @example 8080
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @example lb-5s8w63yydi59w7klaikam****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @example 60
     *
     * @var int
     */
    public $requestTimeout;

    /**
     * @example wrr
     *
     * @var string
     */
    public $scheduler;

    /**
     * @example 6027667
     *
     * @var string
     */
    public $serverCertificateId;

    /**
     * @example insert
     *
     * @var string
     */
    public $stickySessionType;

    /**
     * @example 3
     *
     * @var int
     */
    public $unhealthyThreshold;
    protected $_name = [
        'cookie'                 => 'Cookie',
        'cookieTimeout'          => 'CookieTimeout',
        'description'            => 'Description',
        'forwardPort'            => 'ForwardPort',
        'healthCheck'            => 'HealthCheck',
        'healthCheckConnectPort' => 'HealthCheckConnectPort',
        'healthCheckDomain'      => 'HealthCheckDomain',
        'healthCheckHttpCode'    => 'HealthCheckHttpCode',
        'healthCheckInterval'    => 'HealthCheckInterval',
        'healthCheckMethod'      => 'HealthCheckMethod',
        'healthCheckTimeout'     => 'HealthCheckTimeout',
        'healthCheckURI'         => 'HealthCheckURI',
        'healthyThreshold'       => 'HealthyThreshold',
        'idleTimeout'            => 'IdleTimeout',
        'listenerForward'        => 'ListenerForward',
        'listenerPort'           => 'ListenerPort',
        'loadBalancerId'         => 'LoadBalancerId',
        'requestTimeout'         => 'RequestTimeout',
        'scheduler'              => 'Scheduler',
        'serverCertificateId'    => 'ServerCertificateId',
        'stickySessionType'      => 'StickySessionType',
        'unhealthyThreshold'     => 'UnhealthyThreshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cookie) {
            $res['Cookie'] = $this->cookie;
        }
        if (null !== $this->cookieTimeout) {
            $res['CookieTimeout'] = $this->cookieTimeout;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->forwardPort) {
            $res['ForwardPort'] = $this->forwardPort;
        }
        if (null !== $this->healthCheck) {
            $res['HealthCheck'] = $this->healthCheck;
        }
        if (null !== $this->healthCheckConnectPort) {
            $res['HealthCheckConnectPort'] = $this->healthCheckConnectPort;
        }
        if (null !== $this->healthCheckDomain) {
            $res['HealthCheckDomain'] = $this->healthCheckDomain;
        }
        if (null !== $this->healthCheckHttpCode) {
            $res['HealthCheckHttpCode'] = $this->healthCheckHttpCode;
        }
        if (null !== $this->healthCheckInterval) {
            $res['HealthCheckInterval'] = $this->healthCheckInterval;
        }
        if (null !== $this->healthCheckMethod) {
            $res['HealthCheckMethod'] = $this->healthCheckMethod;
        }
        if (null !== $this->healthCheckTimeout) {
            $res['HealthCheckTimeout'] = $this->healthCheckTimeout;
        }
        if (null !== $this->healthCheckURI) {
            $res['HealthCheckURI'] = $this->healthCheckURI;
        }
        if (null !== $this->healthyThreshold) {
            $res['HealthyThreshold'] = $this->healthyThreshold;
        }
        if (null !== $this->idleTimeout) {
            $res['IdleTimeout'] = $this->idleTimeout;
        }
        if (null !== $this->listenerForward) {
            $res['ListenerForward'] = $this->listenerForward;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->requestTimeout) {
            $res['RequestTimeout'] = $this->requestTimeout;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }
        if (null !== $this->serverCertificateId) {
            $res['ServerCertificateId'] = $this->serverCertificateId;
        }
        if (null !== $this->stickySessionType) {
            $res['StickySessionType'] = $this->stickySessionType;
        }
        if (null !== $this->unhealthyThreshold) {
            $res['UnhealthyThreshold'] = $this->unhealthyThreshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLoadBalancerHTTPSListenerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cookie'])) {
            $model->cookie = $map['Cookie'];
        }
        if (isset($map['CookieTimeout'])) {
            $model->cookieTimeout = $map['CookieTimeout'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ForwardPort'])) {
            $model->forwardPort = $map['ForwardPort'];
        }
        if (isset($map['HealthCheck'])) {
            $model->healthCheck = $map['HealthCheck'];
        }
        if (isset($map['HealthCheckConnectPort'])) {
            $model->healthCheckConnectPort = $map['HealthCheckConnectPort'];
        }
        if (isset($map['HealthCheckDomain'])) {
            $model->healthCheckDomain = $map['HealthCheckDomain'];
        }
        if (isset($map['HealthCheckHttpCode'])) {
            $model->healthCheckHttpCode = $map['HealthCheckHttpCode'];
        }
        if (isset($map['HealthCheckInterval'])) {
            $model->healthCheckInterval = $map['HealthCheckInterval'];
        }
        if (isset($map['HealthCheckMethod'])) {
            $model->healthCheckMethod = $map['HealthCheckMethod'];
        }
        if (isset($map['HealthCheckTimeout'])) {
            $model->healthCheckTimeout = $map['HealthCheckTimeout'];
        }
        if (isset($map['HealthCheckURI'])) {
            $model->healthCheckURI = $map['HealthCheckURI'];
        }
        if (isset($map['HealthyThreshold'])) {
            $model->healthyThreshold = $map['HealthyThreshold'];
        }
        if (isset($map['IdleTimeout'])) {
            $model->idleTimeout = $map['IdleTimeout'];
        }
        if (isset($map['ListenerForward'])) {
            $model->listenerForward = $map['ListenerForward'];
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['RequestTimeout'])) {
            $model->requestTimeout = $map['RequestTimeout'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }
        if (isset($map['ServerCertificateId'])) {
            $model->serverCertificateId = $map['ServerCertificateId'];
        }
        if (isset($map['StickySessionType'])) {
            $model->stickySessionType = $map['StickySessionType'];
        }
        if (isset($map['UnhealthyThreshold'])) {
            $model->unhealthyThreshold = $map['UnhealthyThreshold'];
        }

        return $model;
    }
}
