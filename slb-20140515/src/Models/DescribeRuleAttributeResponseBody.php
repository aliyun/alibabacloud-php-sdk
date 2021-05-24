<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class DescribeRuleAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $healthCheckHttpCode;

    /**
     * @var string
     */
    public $VServerGroupId;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $cookie;

    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var string
     */
    public $listenerPort;

    /**
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $healthCheckURI;

    /**
     * @var string
     */
    public $stickySessionType;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @var string
     */
    public $scheduler;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $healthCheckTimeout;

    /**
     * @var string
     */
    public $listenerSync;

    /**
     * @var int
     */
    public $healthyThreshold;

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
    public $stickySession;

    /**
     * @var string
     */
    public $healthCheck;
    protected $_name = [
        'healthCheckHttpCode'    => 'HealthCheckHttpCode',
        'VServerGroupId'         => 'VServerGroupId',
        'domain'                 => 'Domain',
        'cookie'                 => 'Cookie',
        'loadBalancerId'         => 'LoadBalancerId',
        'listenerPort'           => 'ListenerPort',
        'healthCheckInterval'    => 'HealthCheckInterval',
        'url'                    => 'Url',
        'healthCheckURI'         => 'HealthCheckURI',
        'stickySessionType'      => 'StickySessionType',
        'ruleName'               => 'RuleName',
        'ruleId'                 => 'RuleId',
        'healthCheckConnectPort' => 'HealthCheckConnectPort',
        'scheduler'              => 'Scheduler',
        'requestId'              => 'RequestId',
        'healthCheckTimeout'     => 'HealthCheckTimeout',
        'listenerSync'           => 'ListenerSync',
        'healthyThreshold'       => 'HealthyThreshold',
        'cookieTimeout'          => 'CookieTimeout',
        'healthCheckDomain'      => 'HealthCheckDomain',
        'unhealthyThreshold'     => 'UnhealthyThreshold',
        'stickySession'          => 'StickySession',
        'healthCheck'            => 'HealthCheck',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->healthCheckHttpCode) {
            $res['HealthCheckHttpCode'] = $this->healthCheckHttpCode;
        }
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->cookie) {
            $res['Cookie'] = $this->cookie;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->healthCheckInterval) {
            $res['HealthCheckInterval'] = $this->healthCheckInterval;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->healthCheckURI) {
            $res['HealthCheckURI'] = $this->healthCheckURI;
        }
        if (null !== $this->stickySessionType) {
            $res['StickySessionType'] = $this->stickySessionType;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->healthCheckConnectPort) {
            $res['HealthCheckConnectPort'] = $this->healthCheckConnectPort;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->healthCheckTimeout) {
            $res['HealthCheckTimeout'] = $this->healthCheckTimeout;
        }
        if (null !== $this->listenerSync) {
            $res['ListenerSync'] = $this->listenerSync;
        }
        if (null !== $this->healthyThreshold) {
            $res['HealthyThreshold'] = $this->healthyThreshold;
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
        if (null !== $this->stickySession) {
            $res['StickySession'] = $this->stickySession;
        }
        if (null !== $this->healthCheck) {
            $res['HealthCheck'] = $this->healthCheck;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRuleAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HealthCheckHttpCode'])) {
            $model->healthCheckHttpCode = $map['HealthCheckHttpCode'];
        }
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Cookie'])) {
            $model->cookie = $map['Cookie'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['HealthCheckInterval'])) {
            $model->healthCheckInterval = $map['HealthCheckInterval'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['HealthCheckURI'])) {
            $model->healthCheckURI = $map['HealthCheckURI'];
        }
        if (isset($map['StickySessionType'])) {
            $model->stickySessionType = $map['StickySessionType'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['HealthCheckConnectPort'])) {
            $model->healthCheckConnectPort = $map['HealthCheckConnectPort'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HealthCheckTimeout'])) {
            $model->healthCheckTimeout = $map['HealthCheckTimeout'];
        }
        if (isset($map['ListenerSync'])) {
            $model->listenerSync = $map['ListenerSync'];
        }
        if (isset($map['HealthyThreshold'])) {
            $model->healthyThreshold = $map['HealthyThreshold'];
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
        if (isset($map['StickySession'])) {
            $model->stickySession = $map['StickySession'];
        }
        if (isset($map['HealthCheck'])) {
            $model->healthCheck = $map['HealthCheck'];
        }

        return $model;
    }
}
