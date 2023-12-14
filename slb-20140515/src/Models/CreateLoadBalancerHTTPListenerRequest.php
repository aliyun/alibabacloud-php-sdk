<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\CreateLoadBalancerHTTPListenerRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateLoadBalancerHTTPListenerRequest extends Model
{
    /**
     * @description The ID of the network ACL that is associated with the listener.
     *
     * >  If **AclStatus** is set to **on**, this parameter is required.
     * @example 123
     *
     * @var string
     */
    public $aclId;

    /**
     * @description Specifies whether to enable access control. Valid values:
     *
     *   **on**: yes
     *   **off** (default): no
     *
     * @example off
     *
     * @var string
     */
    public $aclStatus;

    /**
     * @description The type of the network ACL. Valid values:
     *
     *   **white**: a whitelist. Only requests from the IP addresses or CIDR blocks in the network ACL are forwarded. Whitelists apply to scenarios where you want to allow only specific IP addresses to access an application. Your service may be adversely affected if the whitelist is not properly configured. If a whitelist is configured, only requests from IP addresses that are added to the whitelist are forwarded by the listener.
     *
     * If you enable a whitelist but do not add an IP address to the ACL, the listener forwards all requests.
     *
     *   **black**: a blacklist. All requests from the IP addresses or CIDR blocks in the ACL are rejected. Blacklists apply to scenarios where you want to block access from specified IP addresses to an application.
     *
     * If a blacklist is configured for a listener but no IP address is added to the blacklist, the listener forwards all requests.
     *
     * >  If **AclStatus** is set to **on**, this parameter is required.
     * @example white
     *
     * @var string
     */
    public $aclType;

    /**
     * @description The backend port that is used by the CLB instance.
     *
     * Valid values: **1** to **65535**.
     *
     * >  If the VServerGroupId parameter is not set, this parameter is required.
     * @example 80
     *
     * @var int
     */
    public $backendServerPort;

    /**
     * @description The maximum bandwidth of the listener. Unit: Mbit/s. Valid values:
     *
     *   **-1**: If you set the value to -1, the bandwidth of the listener is unlimited.
     *   **1** to **5120**: The sum of bandwidth values that you specify for all listeners of the CLB instance cannot exceed the maximum bandwidth of the CLB instance.
     *
     * >  This parameter is available only in the Chinese mainland.
     * @example -1
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The cookie that is configured on the server.
     *
     * The cookie must be 1 to 200 characters in length and can contain only ASCII characters and digits. It cannot contain commas (,), semicolons (;), or space characters. It cannot start with a dollar sign ($).
     *
     * >  This parameter is required if the **StickySession** parameter is set to **on** and the **StickySessionType** parameter is set to **server**.
     * @example B490B5EBF6F3CD402E515D22BCDA1598
     *
     * @var string
     */
    public $cookie;

    /**
     * @description The timeout period of a cookie. Unit: seconds.
     *
     * Valid values: **1** to **86400**.
     *
     * >  If **StickySession** is set to **on** and **StickySessionType** is set to **insert**, this parameter is required.
     * @example 500
     *
     * @var int
     */
    public $cookieTimeout;

    /**
     * @description The name of the listener.
     *
     * The name must be 1 to 256 characters in length, and can contain letters, digits, hyphens (-), forward slashes (/), periods (.), and underscores (\_).
     * @example HTTP_443
     *
     * @var string
     */
    public $description;

    /**
     * @description The listening port that is used to redirect HTTP requests to HTTPS.
     *
     * @example 443
     *
     * @var int
     */
    public $forwardPort;

    /**
     * @description Specifies whether to enable `Gzip` compression to compress specific types of files. Valid values:
     *
     *   **on** (default): yes
     *   **off**: no
     *
     * @example on
     *
     * @var string
     */
    public $gzip;

    /**
     * @description Specifies whether to enable the health check feature. Valid values:
     *
     *   **on**: yes
     *   **off**: no
     *
     * @example on
     *
     * @var string
     */
    public $healthCheck;

    /**
     * @description The backend port that is used for health checks.
     *
     * Valid values: **1** to **65535**.
     *
     * >  This parameter takes effect only if the **HealthCheck** parameter is set to **on**.
     * @example 80
     *
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @description The domain name that is used for health checks. Valid values:
     *
     *   **$\_ip**: the private IP address of a backend server. If you do not set the HealthCheckDomain parameter or set the parameter to $\_ip, the CLB instance uses the private IP address of each backend server for health checks.
     *   **domain**: The domain name must be 1 to 80 characters in length and can contain letters, digits, periods (.), and hyphens (-).
     *
     * >  This parameter takes effect only if the **HealthCheck** parameter is set to **on**.
     * @example 172.16.0.0/12
     *
     * @var string
     */
    public $healthCheckDomain;

    /**
     * @description The HTTP status code for a successful health check. Separate multiple HTTP status codes with commas (,).
     *
     * Valid values: **http\_2xx** (default), **http\_3xx**, **http\_4xx**, and **http\_5xx**.
     *
     * >  This parameter takes effect only if the **HealthCheck** parameter is set to **on**.
     * @example http_2xx
     *
     * @var string
     */
    public $healthCheckHttpCode;

    /**
     * @description The interval between two consecutive health checks. Unit: seconds.
     *
     * Valid values: **1** to **50**.
     *
     * >  This parameter takes effect only if the **HealthCheck** parameter is set to **on**.
     * @example 5
     *
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @description The health check method used in HTTP health checks. Valid values: **head** and **get**.
     *
     * >  This parameter takes effect only if the **HealthCheck** parameter is set to **on**.
     * @example get
     *
     * @var string
     */
    public $healthCheckMethod;

    /**
     * @description The timeout period of a health check response. If a backend server, such as an Elastic Compute Service (ECS) instance, does not respond to a probe packet within the specified timeout period, the server fails the health check. Unit: seconds.
     *
     * Valid values: **1** to **300**.
     *
     * >
     *   If the value of the **HealthCheckTimeout** parameter is smaller than that of the **HealthCheckInterval** parameter, the timeout period specified by the **HealthCheckTimeout** parameter is ignored and the period of time specified by the **HealthCheckInterval** parameter is used as the timeout period.
     *   This parameter takes effect only if the **HealthCheck** parameter is set to **on**.
     *
     * @example 3
     *
     * @var int
     */
    public $healthCheckTimeout;

    /**
     * @description The URI that is used for health checks.
     *
     * The URI must be 1 to 80 characters in length, and can contain letters, digits, hyphens (-), forward slashes (/), periods (.), percent signs (%), question marks (?), number signs (#), and ampersands (&). The URI must start with a forward slash (/) but cannot be a single forward slash (/).
     *
     * >  This parameter takes effect only if the **HealthCheck** parameter is set to **on**.
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
     * >  This parameter takes effect only if the **HealthCheck** parameter is set to **on**.
     * @example 4
     *
     * @var int
     */
    public $healthyThreshold;

    /**
     * @description The timeout period of an idle connection. Unit: seconds.
     *
     * Default value: **15**. Valid values: **1** to **60**.
     *
     * If no request is received within the specified timeout period, SLB closes the connection. When a request is received, SLB establishes a new connection.
     * @example 3
     *
     * @var int
     */
    public $idleTimeout;

    /**
     * @description Specifies whether to enable HTTP-to-HTTPS redirection. Valid values:
     *
     *   **on**: yes
     *   **off** (default): no
     *
     * @example off
     *
     * @var string
     */
    public $listenerForward;

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
     * @description The ID of the CLB instance.
     *
     * @example lb-bp1c9vixxjh92q83tw*****
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
     * @description The ID of the region where the CLB instance is deployed.
     *
     * You can query the region ID from the [Regions and zones](~~40654~~) list or by calling the [DescribeRegions](~~27584~~) operation.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The timeout period of a request. Unit: seconds.
     *
     * Default value: **60**. Valid values: **1** to **180**.
     *
     * If no response is received from the backend server within the specified timeout period, CLB sends an `HTTP 504` error code to the client.
     * @example 6
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
     *   **wrr** (default): Backend servers with higher weights receive more requests than backend servers with lower weights.
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
     *   **on**: yes
     *   **off** (default): no
     *
     * @example off
     *
     * @var string
     */
    public $stickySession;

    /**
     * @description The method that is used to handle a cookie. Valid values:
     *
     *   **insert**: inserts a cookie.
     *
     * CLB inserts a cookie (SERVERID) into the first HTTP or HTTPS response that is sent to a client. The next request from the client carries this cookie, and the listener will forward this request to the recorded backend server.
     *
     *   **server**: rewrites a cookie.
     *
     * When CLB detects a user-defined cookie, it overwrites the original cookie with the user-defined cookie. The next request from the client carries the user-defined cookie, and the listener forwards this request to the recorded backend server.
     *
     * > This parameter is required if the **StickySession** parameter is set to **on**.
     * @example insert
     *
     * @var string
     */
    public $stickySessionType;

    /**
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The number of times that a healthy backend server must consecutively fail health checks before it is declared unhealthy. In this case, the health status is changed from **success** to **fail**.
     *
     * Valid values: **2** to **10**.
     *
     * >  This parameter takes effect only if the **HealthCheck** parameter is set to **on**.
     * @example 4
     *
     * @var int
     */
    public $unhealthyThreshold;

    /**
     * @description The ID of the vServer group.
     *
     * @example rsp-cige6j*****
     *
     * @var string
     */
    public $VServerGroupId;

    /**
     * @description Specifies whether to use the `X-Forwarded-For` header to retrieve client IP addresses. Valid values:
     *
     *   **on** (default): yes
     *   **off**: no
     *
     * @example on
     *
     * @var string
     */
    public $XForwardedFor;

    /**
     * @var string
     */
    public $XForwardedFor_ClientSrcPort;

    /**
     * @description Specifies whether to use the `SLB-ID` header to retrieve the ID of the CLB instance. Valid values:
     *
     *   **on**: yes
     *   **off** (default): no
     *
     * @example on
     *
     * @var string
     */
    public $XForwardedFor_SLBID;

    /**
     * @description Specifies whether to use the `SLB-IP` header to retrieve the virtual IP address (VIP) of the client. Valid values:
     *
     *   **on**: yes
     *   **off** (default): no
     *
     * @example on
     *
     * @var string
     */
    public $XForwardedFor_SLBIP;

    /**
     * @var string
     */
    public $XForwardedFor_SLBPORT;

    /**
     * @description Specifies whether to use the `X-Forwarded-Proto` header to retrieve the listening protocol. Valid values:
     *
     *   **on**: yes
     *   **off** (default): no
     *
     * @example on
     *
     * @var string
     */
    public $XForwardedFor_proto;
    protected $_name = [
        'aclId'                       => 'AclId',
        'aclStatus'                   => 'AclStatus',
        'aclType'                     => 'AclType',
        'backendServerPort'           => 'BackendServerPort',
        'bandwidth'                   => 'Bandwidth',
        'cookie'                      => 'Cookie',
        'cookieTimeout'               => 'CookieTimeout',
        'description'                 => 'Description',
        'forwardPort'                 => 'ForwardPort',
        'gzip'                        => 'Gzip',
        'healthCheck'                 => 'HealthCheck',
        'healthCheckConnectPort'      => 'HealthCheckConnectPort',
        'healthCheckDomain'           => 'HealthCheckDomain',
        'healthCheckHttpCode'         => 'HealthCheckHttpCode',
        'healthCheckInterval'         => 'HealthCheckInterval',
        'healthCheckMethod'           => 'HealthCheckMethod',
        'healthCheckTimeout'          => 'HealthCheckTimeout',
        'healthCheckURI'              => 'HealthCheckURI',
        'healthyThreshold'            => 'HealthyThreshold',
        'idleTimeout'                 => 'IdleTimeout',
        'listenerForward'             => 'ListenerForward',
        'listenerPort'                => 'ListenerPort',
        'loadBalancerId'              => 'LoadBalancerId',
        'ownerAccount'                => 'OwnerAccount',
        'ownerId'                     => 'OwnerId',
        'regionId'                    => 'RegionId',
        'requestTimeout'              => 'RequestTimeout',
        'resourceOwnerAccount'        => 'ResourceOwnerAccount',
        'resourceOwnerId'             => 'ResourceOwnerId',
        'scheduler'                   => 'Scheduler',
        'stickySession'               => 'StickySession',
        'stickySessionType'           => 'StickySessionType',
        'tag'                         => 'Tag',
        'unhealthyThreshold'          => 'UnhealthyThreshold',
        'VServerGroupId'              => 'VServerGroupId',
        'XForwardedFor'               => 'XForwardedFor',
        'XForwardedFor_ClientSrcPort' => 'XForwardedFor_ClientSrcPort',
        'XForwardedFor_SLBID'         => 'XForwardedFor_SLBID',
        'XForwardedFor_SLBIP'         => 'XForwardedFor_SLBIP',
        'XForwardedFor_SLBPORT'       => 'XForwardedFor_SLBPORT',
        'XForwardedFor_proto'         => 'XForwardedFor_proto',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->forwardPort) {
            $res['ForwardPort'] = $this->forwardPort;
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
        if (null !== $this->listenerForward) {
            $res['ListenerForward'] = $this->listenerForward;
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
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->XForwardedFor_ClientSrcPort) {
            $res['XForwardedFor_ClientSrcPort'] = $this->XForwardedFor_ClientSrcPort;
        }
        if (null !== $this->XForwardedFor_SLBID) {
            $res['XForwardedFor_SLBID'] = $this->XForwardedFor_SLBID;
        }
        if (null !== $this->XForwardedFor_SLBIP) {
            $res['XForwardedFor_SLBIP'] = $this->XForwardedFor_SLBIP;
        }
        if (null !== $this->XForwardedFor_SLBPORT) {
            $res['XForwardedFor_SLBPORT'] = $this->XForwardedFor_SLBPORT;
        }
        if (null !== $this->XForwardedFor_proto) {
            $res['XForwardedFor_proto'] = $this->XForwardedFor_proto;
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
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['AclStatus'])) {
            $model->aclStatus = $map['AclStatus'];
        }
        if (isset($map['AclType'])) {
            $model->aclType = $map['AclType'];
        }
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ForwardPort'])) {
            $model->forwardPort = $map['ForwardPort'];
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
        if (isset($map['ListenerForward'])) {
            $model->listenerForward = $map['ListenerForward'];
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
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
        if (isset($map['XForwardedFor_ClientSrcPort'])) {
            $model->XForwardedFor_ClientSrcPort = $map['XForwardedFor_ClientSrcPort'];
        }
        if (isset($map['XForwardedFor_SLBID'])) {
            $model->XForwardedFor_SLBID = $map['XForwardedFor_SLBID'];
        }
        if (isset($map['XForwardedFor_SLBIP'])) {
            $model->XForwardedFor_SLBIP = $map['XForwardedFor_SLBIP'];
        }
        if (isset($map['XForwardedFor_SLBPORT'])) {
            $model->XForwardedFor_SLBPORT = $map['XForwardedFor_SLBPORT'];
        }
        if (isset($map['XForwardedFor_proto'])) {
            $model->XForwardedFor_proto = $map['XForwardedFor_proto'];
        }

        return $model;
    }
}
