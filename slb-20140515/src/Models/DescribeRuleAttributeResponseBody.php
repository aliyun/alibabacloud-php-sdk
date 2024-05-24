<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class DescribeRuleAttributeResponseBody extends Model
{
    /**
     * @description The cookie to be configured on the backend server.
     *
     * The cookie must be 1 to 200 characters in length and can contain ASCII letters and digits. It cannot contain commas (,), semicolons (;), or whitespace characters. It cannot start with a dollar sign ($).
     *
     * If you set the **StickySession** parameter to **on** and the **StickySessionType** parameter to **server**, this parameter is required.
     * @example wwe
     *
     * @var string
     */
    public $cookie;

    /**
     * @description The timeout period of a cookie.
     *
     * Valid values: **1 to 86400**. Unit: seconds.
     *
     * >  If you set the **StickySession** parameter to **on** and the **StickySessionType** parameter to **insert**, this parameter is required.
     * @example 12
     *
     * @var int
     */
    public $cookieTimeout;

    /**
     * @description The domain name that is configured in the forwarding rule.
     *
     * @example test.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description Specifies whether to enable health checks.
     *
     * Valid values: **on** and **off**.
     *
     * >  If you set the **ListenerSync** parameter to **off**, this parameter is required. If you set the parameter to **on**, the configuration of the listener is used.
     * @example off
     *
     * @var string
     */
    public $healthCheck;

    /**
     * @description The port of the backend server that is used for health checks.
     *
     * Valid values: **1** to **65535**.
     *
     * >  If you set the **HealthCheck** parameter to **on**, this parameter is required. If you left this parameter empty and the **HealthCheck** parameter is set to **on**, the backend port configuration of the listener is used by default.
     * @example 23
     *
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @description The domain name that is used for health checks. Valid values:
     *
     *   **$_ip**: The private IP address of the backend server. If the $_ip parameter is set or the HealthCheckDomain parameter is not set, SLB uses the private IP addresses of backend servers as the domain names for health checks.
     *   **domain**: The domain name must be 1 to 80 characters in length. It can contain only letters, digits, periods (.),and hyphens (-).
     *
     * >  If you set the **HealthCheck** parameter to **on**, this parameter is required.
     * @example www.example.com
     *
     * @var string
     */
    public $healthCheckDomain;

    /**
     * @description The HTTP status code that indicates a successful health check. Separate multiple HTTP status codes with commas (,). Default value: **http_2xx**.
     *
     * Valid values: **http_2xx**, **http_3xx**, **http_4xx**, and **http_5xx**.
     *
     * >  If you set the **HealthCheck** parameter to **on**, this parameter is required.
     * @example http_3xx
     *
     * @var string
     */
    public $healthCheckHttpCode;

    /**
     * @description The time interval between two consecutive health checks.
     *
     * Valid values: **1** to **50**. Unit: seconds.
     *
     * >  If you set the **HealthCheck** parameter to **on**, this parameter is required.
     * @example 34
     *
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @description The timeout period of a health check response. If a backend ECS instance does not send an expected response within the specified period of time, the ECS instance is considered unhealthy.
     *
     * Valid values: **1** to **300**. Unit: seconds.
     *
     * >  If the value of the **HealthCHeckTimeout** parameter is smaller than that of the **HealthCheckInterval** parameter, the value of the **HealthCHeckTimeout** parameter is ignored and the value of the **HealthCheckInterval** parameter is regarded as the waiting period. If you set the **HealthCheck** parameter to **on**, this parameter is required.
     * @example 34
     *
     * @var int
     */
    public $healthCheckTimeout;

    /**
     * @description The URI that is used for health checks.
     *
     * >  If you set the **HealthCheck** parameter to **on**, this parameter is required.
     * @example 10.21.22.1
     *
     * @var string
     */
    public $healthCheckURI;

    /**
     * @description The number of consecutive successful health checks that must occur before an unhealthy backend server is declared healthy. In this case, the health check state is changed from **fail** to **success**.
     *
     * Valid values: **2** to **10**.
     *
     * >  If you set the **HealthCheck** parameter to **on**, this parameter is required.
     * @example 2
     *
     * @var int
     */
    public $healthyThreshold;

    /**
     * @description The listener port that is used by the SLB instance.
     *
     * @example 90
     *
     * @var string
     */
    public $listenerPort;

    /**
     * @description Indicates whether the forwarding rule uses the scheduling algorithm, session persistence, and health check configurations of the listener.
     *
     * Valid values: **on** and **off**.
     *
     *   **off**: does not use the configurations of the listener. You can customize health check and session persistence configurations for the forwarding rule.
     *   **on**: uses the configurations of the listener.
     *
     * @example off
     *
     * @var string
     */
    public $listenerSync;

    /**
     * @description The ID of the SLB instance.
     *
     * @example lb-bp1ca0zt07t934wxe****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The ID of the request.
     *
     * @example 9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the forwarding rule.
     *
     * @example rule-hfgnd*****
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The name of the forwarding rule.
     *
     * @example Rule1
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The scheduling algorithm. Valid values:
     *
     *   **wrr** (default): Backend servers that have higher weights receive more requests than backend servers that have lower weights.
     *   **rr**: Requests are distributed to backend servers in sequence.
     *
     * >  If you set the **ListenerSync** parameter to **off**, this parameter is required. If you set the parameter to **on**, the configuration of the listener is used.
     * @example wrr
     *
     * @var string
     */
    public $scheduler;

    /**
     * @description Indicates whether session persistence is enabled.
     *
     * Valid values: **on** and **off**.
     *
     * >  If you set the **ListenerSync** parameter to **off**, this parameter is required. If you set the parameter to **on**, the configuration of the listener is used.
     * @example off
     *
     * @var string
     */
    public $stickySession;

    /**
     * @description The method that is used to handle a cookie. Valid values:
     *
     *   **insert**: inserts a cookie into the response. SLB inserts a cookie (SERVERID) into the first HTTP or HTTPS response packet that is sent to a client. The next request from the client will contain this cookie, and the listener will distribute this request to the recorded backend server.
     *   **server**: rewrites a cookie. When SLB detects a user-defined cookie, SLB overwrites the original cookie with the user-defined cookie. The next request from the client contains the user-defined cookie, and the listener distributes the request to the recorded backend server.
     *
     * >  If you set the **StickySession** parameter to **on**, this parameter is required.
     * @example insert
     *
     * @var string
     */
    public $stickySessionType;

    /**
     * @description The number of consecutive failed health checks that must occur before a healthy backend server is declared unhealthy. In this case, the health check state is changed from **success** to **fail**.
     *
     * Valid values: **2** to **10**.
     *
     * >  If you set the **HealthCheck** parameter to **on**, this parameter is required.
     * @example 3
     *
     * @var int
     */
    public $unhealthyThreshold;

    /**
     * @description The URL that is configured in the forwarding rule.
     *
     * @example /cache
     *
     * @var string
     */
    public $url;

    /**
     * @description The ID of the vServer group that is associated with the forwarding rule.
     *
     * @example rsp-cige6j****
     *
     * @var string
     */
    public $VServerGroupId;
    protected $_name = [
        'cookie'                 => 'Cookie',
        'cookieTimeout'          => 'CookieTimeout',
        'domain'                 => 'Domain',
        'healthCheck'            => 'HealthCheck',
        'healthCheckConnectPort' => 'HealthCheckConnectPort',
        'healthCheckDomain'      => 'HealthCheckDomain',
        'healthCheckHttpCode'    => 'HealthCheckHttpCode',
        'healthCheckInterval'    => 'HealthCheckInterval',
        'healthCheckTimeout'     => 'HealthCheckTimeout',
        'healthCheckURI'         => 'HealthCheckURI',
        'healthyThreshold'       => 'HealthyThreshold',
        'listenerPort'           => 'ListenerPort',
        'listenerSync'           => 'ListenerSync',
        'loadBalancerId'         => 'LoadBalancerId',
        'requestId'              => 'RequestId',
        'ruleId'                 => 'RuleId',
        'ruleName'               => 'RuleName',
        'scheduler'              => 'Scheduler',
        'stickySession'          => 'StickySession',
        'stickySessionType'      => 'StickySessionType',
        'unhealthyThreshold'     => 'UnhealthyThreshold',
        'url'                    => 'Url',
        'VServerGroupId'         => 'VServerGroupId',
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
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
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
        if (null !== $this->healthCheckTimeout) {
            $res['HealthCheckTimeout'] = $this->healthCheckTimeout;
        }
        if (null !== $this->healthCheckURI) {
            $res['HealthCheckURI'] = $this->healthCheckURI;
        }
        if (null !== $this->healthyThreshold) {
            $res['HealthyThreshold'] = $this->healthyThreshold;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->listenerSync) {
            $res['ListenerSync'] = $this->listenerSync;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
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
        if (null !== $this->unhealthyThreshold) {
            $res['UnhealthyThreshold'] = $this->unhealthyThreshold;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
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
        if (isset($map['HealthCheckTimeout'])) {
            $model->healthCheckTimeout = $map['HealthCheckTimeout'];
        }
        if (isset($map['HealthCheckURI'])) {
            $model->healthCheckURI = $map['HealthCheckURI'];
        }
        if (isset($map['HealthyThreshold'])) {
            $model->healthyThreshold = $map['HealthyThreshold'];
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['ListenerSync'])) {
            $model->listenerSync = $map['ListenerSync'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
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
        if (isset($map['UnhealthyThreshold'])) {
            $model->unhealthyThreshold = $map['UnhealthyThreshold'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }

        return $model;
    }
}
