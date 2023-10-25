<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class SetLoadBalancerHTTPListenerAttributeRequest extends Model
{
    /**
     * @description The ID of the access control list (ACL) that is associated with the listener.
     *
     * > This parameter is required when **AclStatus** is set to **on**.
     * @example 123
     *
     * @var string
     */
    public $aclId;

    /**
     * @description Specifies whether to enable access control. Valid values:
     *
     *   **on**
     *   **off**
     *
     * @example off
     *
     * @var string
     */
    public $aclStatus;

    /**
     * @description The type of the ACL. Valid values:
     *
     *   **white**: a whitelist. Only requests from the IP addresses or CIDR blocks in the ACL are forwarded. Whitelists apply to scenarios where you want to allow only specific IP addresses to access an application. Risks may occur if a whitelist is improperly configured. If a whitelist is configured, only requests from IP addresses that are added to the whitelist are forwarded by the listener.
     *
     * If you enable a whitelist but do not add an IP address to the ACL, the listener forwards all requests.
     *
     *   **black**: a blacklist. All requests from the IP addresses or CIDR blocks in the ACL are rejected. Blacklists apply to scenarios where you want to block access from specified IP addresses to an application.
     *
     * If a blacklist is configured for a listener but no IP addresses are added to the blacklist, the listener forwards all requests.
     *
     * > This parameter takes effect when the value of **AclStatus** is set to **on**.
     * @example white
     *
     * @var string
     */
    public $aclType;

    /**
     * @description The maximum bandwidth of the listener. Unit: Mbit/s. Set the value to
     *
     *   **-1**: For a pay-by-data-transfer Internet-facing CLB instance, this value specifies that the bandwidth of the listener is unlimited.
     *
     * @example -1
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The cookie that is configured on the server.
     *
     * The cookie must be 1 to 200 characters in length, and can contain ASCII characters and digits. It cannot contain commas (,), semicolons (;), or spaces. It cannot start with a dollar sign ($).
     *
     * > This parameter is required when **StickySession** is set to **on** and **StickySessionType** is set to **server**.
     * @example B490B5EBF6F3CD402E515D22BCDA****
     *
     * @var string
     */
    public $cookie;

    /**
     * @description The timeout period of a cookie.
     *
     * Valid values: **1** to **86400**. Unit: seconds.
     *
     * > This parameter is required when **StickySession** is set to **on** and **StickySessionType** is set to **insert**.
     * @example 500
     *
     * @var int
     */
    public $cookieTimeout;

    /**
     * @description The description of the listener.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to enable `GZIP` compression to compress specific types of files. Valid values:
     *
     *   **on**
     *   **off**
     *
     * @example on
     *
     * @var string
     */
    public $gzip;

    /**
     * @description Specifies whether to enable the health check feature. Valid values:
     *
     *   **on**
     *   **off**
     *
     * @example on
     *
     * @var string
     */
    public $healthCheck;

    /**
     * @description The port that is used for health checks.
     *
     * Valid values: **1** to **65535**.
     *
     * > This parameter takes effect only if you set **HealthCheck** to **on**.
     * @example 8080
     *
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @description The domain name that is used for health checks. Valid values:
     *
     *   **$\_ip**: the private IP address of a backend server. If you specify \*\*$\_ip **or** ignore HealthCheckDomain\*\*, CLB uses the private IP addresses of backend servers as the health check domain names.
     *   **domain**: The domain name must be 1 to 80 characters in length, and can contain letters, digits, periods (.), and hyphens (-).
     *
     * > The parameter takes effect only if you set **HealthCheck** to **on**.
     * @example 172.XX.XX.16
     *
     * @var string
     */
    public $healthCheckDomain;

    /**
     * @description The HTTP status code for a successful health check. Separate multiple HTTP status codes with commas (,).
     *
     * Valid values: **http\_2xx**, **http\_3xx**, **http\_4xx**, and **http\_5xx**.
     *
     * >  The parameter takes effect only if you set **HealthCheck** to **on**.
     * @example http_2xx,http_3xx
     *
     * @var string
     */
    public $healthCheckHttpCode;

    /**
     * @description The interval at which health checks are performed.
     *
     * Valid values: **1** to **50**. Unit: seconds.
     *
     * >  The parameter takes effect only if you set **HealthCheck** to **on**.
     * @example 5
     *
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @description The health check method that is used in HTTP health checks. Valid values: **head** and **get**.
     *
     * > The parameter takes effect only if you set **HealthCheck** to **on**.
     * @example get
     *
     * @var string
     */
    public $healthCheckMethod;

    /**
     * @description The timeout period of a health check response. If a backend server, such as an Elastic Compute Service (ECS) instance, does not respond to a probe packet within the specified timeout period, the server fails the health check. This parameter takes effect only if you set **HealthCheck** to **on**.
     *
     * Valid values: **1** to **300**. Unit: seconds.
     *
     * > If the value of **HealthCheckTimeout** is smaller than the value of **HealthCheckInterval**, the value of **HealthCheckTimeout** becomes invalid and the value of **HealthCheckInterval** is used as the timeout period.
     * @example 3
     *
     * @var int
     */
    public $healthCheckTimeout;

    /**
     * @description The Uniform Resource Identifier (URI) that you want to use for health checks.
     *
     * The URI must be 1 to 80 characters in length, and can contain letters, digits, and the following characters: - / . % ? # & The URI must start with a forward slash (/) but cannot be a single forward slash (/).
     *
     * > The parameter takes effect only if you set **HealthCheck** to **on**.
     * @example /test/index.html
     *
     * @var string
     */
    public $healthCheckURI;

    /**
     * @description The number of times that an unhealthy backend server must consecutively pass health checks before it is declared healthy. In this case, the health status is changed from **fail** to **success**.
     *
     * Valid values: **2** to **10**.
     *
     * > The parameter takes effect only if you set **HealthCheck** to **on**.
     * @example 4
     *
     * @var int
     */
    public $healthyThreshold;

    /**
     * @description The timeout period of an idle connection. Unit: seconds. Valid values: **1 to 60**. Default value: **15**.
     *
     * If no request is received within the specified timeout period, CLB closes the connection. When a request is received, CLB establishes a new connection.
     * @example 12
     *
     * @var int
     */
    public $idleTimeout;

    /**
     * @description The frontend port that is used by the CLB instance.
     *
     * Valid values: **1** to **65535**.
     * @example 80
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description The CLB instance ID.
     *
     * @example lb-bp1qjwo61pqz3ah*****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the CLB instance.
     *
     * You can query the region ID from the [Regions and zones](~~27585~~) list or by calling the [DescribeRegions](~~27584~~) operation.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The timeout period of a request. Unit: seconds. Valid values: **1 to 180**. Default value: **60**.
     *
     * If no response is received from the backend server within the request timeout period, CLB returns an HTTP 504 error code to the client.
     * @example 3
     *
     * @var int
     */
    public $requestTimeout;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The scheduling algorithm. Valid values:
     *
     *   **wrr**: Backend servers that have higher weights receive more requests than backend servers that have lower weights.
     *   **rr**: Requests are distributed to backend servers in sequence.
     *
     * @example wrr
     *
     * @var string
     */
    public $scheduler;

    /**
     * @description Specifies whether to enable session persistence. Valid values:
     *
     *   **on**
     *   **off**
     *
     * @example on
     *
     * @var string
     */
    public $stickySession;

    /**
     * @description The method that is used to handle a cookie. Valid values:
     *
     *   **insert**: inserts a cookie.
     *
     * CLB inserts a cookie (SERVERID) into the first HTTP or HTTPS response packet that is sent to a client. The next request from the client contains this cookie, and the listener distributes the request to the recorded backend server.
     *
     *   **server**: rewrites a cookie.
     *
     * When CLB detects a user-defined cookie, CLB overwrites the original cookie with the user-defined cookie. The next request from the client carries the user-defined cookie, and the listener forwards the request to the recorded backend server.
     *
     * > This parameter is required when **StickySession** is set to **on**.
     * @example insert
     *
     * @var string
     */
    public $stickySessionType;

    /**
     * @description The number of times that a healthy backend server must consecutively fail health checks before it is declared unhealthy. In this case, the health status is changed from **success** to **fail**.
     *
     * Valid values: **2** to **10**.
     *
     * > The parameter takes effect only if you set **HealthCheck** to **on**.
     * @example 4
     *
     * @var int
     */
    public $unhealthyThreshold;

    /**
     * @description Specifies whether to use a vServer group. Valid values:
     *
     *   **on**
     *   **off**
     *
     * @example on
     *
     * @var string
     */
    public $VServerGroup;

    /**
     * @description The ID of the vServer group.
     *
     * @example rsp-cige6j*****
     *
     * @var string
     */
    public $VServerGroupId;

    /**
     * @description Specifies whether to use the `X-Forwarded-For` header to preserve client IP addresses. Valid values:
     *
     *   **on** (default)
     *   **off**
     *
     * @example on
     *
     * @var string
     */
    public $XForwardedFor;

    /**
     * @description Specifies whether to use the `SLB-ID` header to retrieve the ID of the CLB instance. Valid values:
     *
     *   **on**
     *   **off**
     *
     * @example on
     *
     * @var string
     */
    public $XForwardedFor_SLBID;

    /**
     * @description Specifies whether to use the `SLB-IP` header to retrieve the virtual IP address (VIP) requested by the client. Valid values:
     *
     *   **on**
     *   **off**
     *
     * @example on
     *
     * @var string
     */
    public $XForwardedFor_SLBIP;

    /**
     * @description Specifies whether to use the `X-Forwarded-Proto` header to retrieve the listener protocol. Valid values:
     *
     *   **on**
     *   **off**
     *
     * @example on
     *
     * @var string
     */
    public $XForwardedFor_proto;
    protected $_name = [
        'aclId'                  => 'AclId',
        'aclStatus'              => 'AclStatus',
        'aclType'                => 'AclType',
        'bandwidth'              => 'Bandwidth',
        'cookie'                 => 'Cookie',
        'cookieTimeout'          => 'CookieTimeout',
        'description'            => 'Description',
        'gzip'                   => 'Gzip',
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
        'listenerPort'           => 'ListenerPort',
        'loadBalancerId'         => 'LoadBalancerId',
        'ownerAccount'           => 'OwnerAccount',
        'ownerId'                => 'OwnerId',
        'regionId'               => 'RegionId',
        'requestTimeout'         => 'RequestTimeout',
        'resourceOwnerAccount'   => 'ResourceOwnerAccount',
        'resourceOwnerId'        => 'ResourceOwnerId',
        'scheduler'              => 'Scheduler',
        'stickySession'          => 'StickySession',
        'stickySessionType'      => 'StickySessionType',
        'unhealthyThreshold'     => 'UnhealthyThreshold',
        'VServerGroup'           => 'VServerGroup',
        'VServerGroupId'         => 'VServerGroupId',
        'XForwardedFor'          => 'XForwardedFor',
        'XForwardedFor_SLBID'    => 'XForwardedFor_SLBID',
        'XForwardedFor_SLBIP'    => 'XForwardedFor_SLBIP',
        'XForwardedFor_proto'    => 'XForwardedFor_proto',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->aclStatus) {
            $res['AclStatus'] = $this->aclStatus;
        }
        if (null !== $this->aclType) {
            $res['AclType'] = $this->aclType;
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestTimeout) {
            $res['RequestTimeout'] = $this->requestTimeout;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
        if (null !== $this->VServerGroup) {
            $res['VServerGroup'] = $this->VServerGroup;
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

    /**
     * @param array $map
     *
     * @return SetLoadBalancerHTTPListenerAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['AclStatus'])) {
            $model->aclStatus = $map['AclStatus'];
        }
        if (isset($map['AclType'])) {
            $model->aclType = $map['AclType'];
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestTimeout'])) {
            $model->requestTimeout = $map['RequestTimeout'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
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
        if (isset($map['VServerGroup'])) {
            $model->VServerGroup = $map['VServerGroup'];
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
