<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class SetLoadBalancerHTTPSListenerAttributeRequest extends Model
{
    /**
     * @description The ID of the network access control list (ACL) that you want to associate with the listener.
     *
     * If **AclStatus** is set to **on**, this parameter is required.
     * @example nacl-a2do9e413e0spzasx****
     *
     * @var string
     */
    public $aclId;

    /**
     * @description Specifies whether to enable access control. Valid values:
     *
     *   **on**: enables access control
     *   **off**: disables access control
     *
     * @example off
     *
     * @var string
     */
    public $aclStatus;

    /**
     * @description The type of network ACL. Valid values:
     *
     *   **white**: a whitelist. Only requests from the IP addresses or CIDR blocks in the network ACL are forwarded. Whitelists apply to scenarios where you want to allow only specific IP addresses to access an application. Your business may be adversely affected if the whitelist is not set properly. After a whitelist is configured, only IP addresses in the whitelist can access the CLB listener.
     *
     * If no IP address is added to the whitelist, the CLB listener forwards all requests.
     *
     *   **black**: a blacklist. All requests from the IP addresses or CIDR blocks in the network ACL are denied. Blacklists apply to scenarios where you want to deny access from specified IP addresses to an application.
     *
     * If no IP address is added to the blacklist, the listener forwards all requests.
     *
     * >  This parameter takes effect only when **AclStatus** is set to **on**.
     * @example white
     *
     * @var string
     */
    public $aclType;

    /**
     * @description The bandwidth limit of the listener. Unit: Mbit/s.
     *
     * Valid values: **-1** and **1** to **5120**.
     *
     *   **-1**: If you set the value to -1, the bandwidth of the listener is unlimited.
     *   **1** to **5120**: If you set a value from 1 to 5120, the value that you specify equals the bandwidth limit of the listener. The sum of bandwidth limit values that you specify for all listeners of the CLB instance cannot exceed the bandwidth limit of the CLB instance.
     *
     * @example -1
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The ID of the CA certificate.
     *
     *   If both the CA certificate and the server certificate are uploaded, mutual authentication is used.
     *   If you upload only the server certificate, one-way authentication is used.
     *
     * @example 139a00604ad-cn-east-****
     *
     * @var string
     */
    public $CACertificateId;

    /**
     * @description The cookie to be configured on the backend server.
     *
     * The cookie must be 1 to 200 characters in length, and can contain only ASCII characters and digits. It cannot contain commas (,), semicolons (;), or space characters. It cannot start with a dollar sign ($).
     *
     * >  This parameter is required if the **StickySession** parameter is set to **on** and the **StickySessionType** parameter is set to **server**.
     * @example B490B5EBF6F3CD4****
     *
     * @var string
     */
    public $cookie;

    /**
     * @description The timeout period of the cookie. Unit: seconds.
     *
     * Valid values: **1** to **86400**.
     *
     * >  This parameter is required if the **StickySession** parameter is set to **on** and the **StickySessionType** parameter is set to **insert**.
     * @example 500
     *
     * @var int
     */
    public $cookieTimeout;

    /**
     * @description The description of the listener.
     *
     * @example Listener1
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to use `HTTP 2.0`. Valid values:
     *
     *   **on**: yes
     *   **off**: no
     *
     * @example off
     *
     * @var string
     */
    public $enableHttp2;

    /**
     * @description Specifies whether to enable `Gzip` compression to compress specific types of files. Valid values:
     *
     *   **on**: yes
     *   **off**: no
     *
     * @example on
     *
     * @var string
     */
    public $gzip;

    /**
     * @description Specifies whether to enable health checks. Valid values:
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
     * @description The port that is used for health checks.
     *
     * Valid values: **1** to **65535**.
     *
     * >  This parameter takes effect only when the **HealthCheck** parameter is set to **on**.
     * @example 8080
     *
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @description The domain name that is used for health checks. Valid values:
     *
     *   **$_ip**: the private IP address of a backend server. If you do not set this parameter or set the parameter to $_ip, the CLB instance uses the private IP address of each backend server as the domain name for health checks.
     *   **domain**: The domain name must be 1 to 80 characters in length, and can contain letters, digits, periods (.),and hyphens (-).
     *
     * >  This parameter takes effect only when the **HealthCheck** parameter is set to **on**.
     * @example 172.XX.XX.16
     *
     * @var string
     */
    public $healthCheckDomain;

    /**
     * @description The HTTP status code of a successful health check. Separate multiple HTTP status codes with commas (,).
     *
     * Valid values: **http_2xx**, **http_3xx**, **http_4xx**, and **http_5xx**.
     *
     * >  This parameter takes effect only when the **HealthCheck** parameter is set to **on**.
     * @example http_2xx,http_3xx
     *
     * @var string
     */
    public $healthCheckHttpCode;

    /**
     * @description The interval between two consecutive health checks. Unit: seconds.
     *
     * Valid values: **1** to **50**.
     *
     * >  This parameter takes effect only when the **HealthCheck** parameter is set to **on**.
     * @example 5
     *
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @description The HTTP method that is used for health checks. Valid values: **head** and **get**.
     *
     * >  This parameter takes effect only when the **HealthCheck** parameter is set to **on**.
     * @example get
     *
     * @var string
     */
    public $healthCheckMethod;

    /**
     * @description The timeout period of a health check response. If a backend server does not respond within the specified timeout period, the health check fails. Unit: seconds.
     *
     * Valid values: **1** to **300**.
     *
     * If the value of the **HealthCheckTimeout** parameter is smaller than that of the **HealthCheckInterval** parameter, the timeout period specified by the **HealthCheckTimeout** parameter is ignored and the period of time specified by the **HealthCheckInterval** parameter is used as the timeout period.
     *
     * >  This parameter takes effect only when the **HealthCheck** parameter is set to **on**.
     * @example 3
     *
     * @var int
     */
    public $healthCheckTimeout;

    /**
     * @description The URL that is used for health checks.
     *
     * The URL must be 1 to 80 characters in length and can contain letters, digits, and the following characters: - / . % ? # &. The URL must not be a single forward slash (/) but it must start with a forward slash (/).
     *
     * >  This parameter takes effect only when the **HealthCheck** parameter is set to **on**.
     * @example /test/index.html
     *
     * @var string
     */
    public $healthCheckURI;

    /**
     * @description The number of health checks that an unhealthy backend server must consecutively pass before it can be declared healthy (from **fail** to **success**).
     *
     * Valid values: **2** to **10**.
     *
     * >  This parameter takes effect only when the **HealthCheck** parameter is set to **on**.
     * @example 4
     *
     * @var int
     */
    public $healthyThreshold;

    /**
     * @description The timeout period of an idle connection. Unit: seconds. Valid values: **1 to 60**. Default value: **15**.
     *
     * If no request is received within the specified timeout period, CLB closes the connection. When another request is received, CLB establishes a new connection.
     * @example 23
     *
     * @var int
     */
    public $idleTimeout;

    /**
     * @description The frontend port that is used by the CLB instance.
     *
     * Valid values: **1** to **65535**.
     *
     * This parameter is required.
     * @example 80
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description The ID of the CLB instance.
     *
     * This parameter is required.
     * @example lb-sjhfdji****
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
     * You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The timeout period of a request. Unit: seconds. Valid values: **1 to 180**. Default value: **60**.
     *
     * If no response is received from the backend server during the request timeout period, CLB sends an HTTP 504 error code to the client.
     * @example 223
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
     * @description The ID of the server certificate.
     *
     * @example idkp-123-cn-te****
     *
     * @var string
     */
    public $serverCertificateId;

    /**
     * @description Specifies whether to enable session persistence. Valid values:
     *
     *   **on**: yes
     *   **off**: no
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
     * CLB inserts a cookie (SERVERID) into the first HTTP or HTTPS response that is sent to a client. The next request from the client will contain this cookie, and the listener will distribute this request to the recorded backend server.
     *
     *   **server**: rewrites a cookie.
     *
     * When CLB detects a user-defined cookie, it overwrites the original cookie with the user-defined cookie. The next request from the client will contain the user-defined cookie, and the listener will distribute this request to the recorded backend server.
     *
     * >  This parameter is required if the **StickySession** parameter is set to **on**.
     * @example insert
     *
     * @var string
     */
    public $stickySessionType;

    /**
     * @description The Transport Layer Security (TLS) security policy. Each security policy contains TLS protocol versions and cipher suites available for HTTPS.
     *
     *   **tls_cipher_policy_1_0**:
     *
     * Supported cipher suites: ECDHE-RSA-AES128-GCM-SHA256, ECDHE-RSA-AES256-GCM-SHA384, ECDHE-RSA-AES128-SHA256, ECDHE-RSA-AES256-SHA384, AES128-GCM-SHA256, AES256-GCM-SHA384, AES128-SHA256, AES256-SHA256, ECDHE-RSA-AES128-SHA, ECDHE-RSA-AES256-SHA, AES128-SHA, AES256-SHA, and DES-CBC3-SHA
     *
     *   **tls_cipher_policy_1_1**:
     *
     * Supported cipher suites: ECDHE-RSA-AES128-GCM-SHA256, ECDHE-RSA-AES256-GCM-SHA384, ECDHE-RSA-AES128-SHA256, ECDHE-RSA-AES256-SHA384, AES128-GCM-SHA256, AES256-GCM-SHA384, AES128-SHA256, AES256-SHA256, ECDHE-RSA-AES128-SHA, ECDHE-RSA-AES256-SHA, AES128-SHA, AES256-SHA, and DES-CBC3-SHA
     *
     *   **tls_cipher_policy_1_2**
     *
     * Supported cipher suites: ECDHE-RSA-AES128-GCM-SHA256, ECDHE-RSA-AES256-GCM-SHA384, ECDHE-RSA-AES128-SHA256, ECDHE-RSA-AES256-SHA384, AES128-GCM-SHA256, AES256-GCM-SHA384, AES128-SHA256, AES256-SHA256, ECDHE-RSA-AES128-SHA, ECDHE-RSA-AES256-SHA, AES128-SHA, AES256-SHA, and DES-CBC3-SHA
     *
     *   **tls_cipher_policy_1_2_strict**
     *
     * Supported cipher suites: ECDHE-RSA-AES128-GCM-SHA256, ECDHE-RSA-AES256-GCM-SHA384, ECDHE-RSA-AES128-SHA256, ECDHE-RSA-AES256-SHA384, ECDHE-RSA-AES128-SHA, and ECDHE-RSA-AES256-SHA
     *
     *   **tls_cipher_policy_1_2_strict_with_1_3**
     *
     * Supported cipher suites: TLS_AES_128_GCM_SHA256, TLS_AES_256_GCM_SHA384, TLS_CHACHA20_POLY1305_SHA256, TLS_AES_128_CCM_SHA256, TLS_AES_128_CCM_8_SHA256, ECDHE-ECDSA-AES128-GCM-SHA256, ECDHE-ECDSA-AES256-GCM-SHA384, ECDHE-ECDSA-AES128-SHA256, ECDHE-ECDSA-AES256-SHA384, ECDHE-RSA-AES128-GCM-SHA256, ECDHE-RSA-AES256-GCM-SHA384, ECDHE-RSA-AES128-SHA256, ECDHE-RSA-AES256-SHA384, ECDHE-ECDSA-AES128-SHA, ECDHE-ECDSA-AES256-SHA, ECDHE-RSA-AES128-SHA, and ECDHE-RSA-AES256-SHA
     * @example tls_cipher_policy_1_2
     *
     * @var string
     */
    public $TLSCipherPolicy;

    /**
     * @description The number of health checks that a healthy backend server must consecutively fail before it can be declared unhealthy (from **success** to **fail**).
     *
     * Valid values: **2** to **10**.
     *
     * >  This parameter takes effect only when the **HealthCheck** parameter is set to **on**.
     * @example 4
     *
     * @var int
     */
    public $unhealthyThreshold;

    /**
     * @description Specifies whether to use a vServer group. Valid values:
     *
     *   **on**: yes
     *   **off**: no
     *
     * @example on
     *
     * @var string
     */
    public $VServerGroup;

    /**
     * @description The ID of the vServer group.
     *
     * @example rsp-cige6j****
     *
     * @var string
     */
    public $VServerGroupId;

    /**
     * @description Specifies whether to use the `X-Forwarded-For` header to retrieve client IP addresses. Valid values:
     *
     *   **on**: yes
     *   **off**: no
     *
     * @example on
     *
     * @var string
     */
    public $XForwardedFor;

    /**
     * @description Specifies whether to use the `XForwardedFor_ClientSrcPort` header to retrieve the client port. Valid values:
     *
     *   **on**
     *   **off**
     *
     * @example off
     *
     * @var string
     */
    public $XForwardedFor_ClientSrcPort;

    /**
     * @description Specifies whether to use the `SLB-ID` header to retrieve the ID of the CLB instance. Valid values:
     *
     *   **on**: yes
     *   **off**: no
     *
     * @example on
     *
     * @var string
     */
    public $XForwardedFor_SLBID;

    /**
     * @description Specifies whether to use the `SLB-IP` header to obtain the virtual IP address (VIP) requested by the client. Valid values:
     *
     *   **on**: yes
     *   **off**: no
     *
     * @example on
     *
     * @var string
     */
    public $XForwardedFor_SLBIP;

    /**
     * @description Specifies whether to use the `XForwardedFor_SLBPORT` header to retrieve the listener port of the CLB instance. Valid values:
     *
     *   **on**
     *   **off**
     *
     * @example off
     *
     * @var string
     */
    public $XForwardedFor_SLBPORT;

    /**
     * @description Specifies whether to use the `X-Forwarded-Proto` header to retrieve the listener protocol. Valid values:
     *
     *   **on**: yes
     *   **off**: no
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
        'bandwidth'                   => 'Bandwidth',
        'CACertificateId'             => 'CACertificateId',
        'cookie'                      => 'Cookie',
        'cookieTimeout'               => 'CookieTimeout',
        'description'                 => 'Description',
        'enableHttp2'                 => 'EnableHttp2',
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
        'listenerPort'                => 'ListenerPort',
        'loadBalancerId'              => 'LoadBalancerId',
        'ownerAccount'                => 'OwnerAccount',
        'ownerId'                     => 'OwnerId',
        'regionId'                    => 'RegionId',
        'requestTimeout'              => 'RequestTimeout',
        'resourceOwnerAccount'        => 'ResourceOwnerAccount',
        'resourceOwnerId'             => 'ResourceOwnerId',
        'scheduler'                   => 'Scheduler',
        'serverCertificateId'         => 'ServerCertificateId',
        'stickySession'               => 'StickySession',
        'stickySessionType'           => 'StickySessionType',
        'TLSCipherPolicy'             => 'TLSCipherPolicy',
        'unhealthyThreshold'          => 'UnhealthyThreshold',
        'VServerGroup'                => 'VServerGroup',
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
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->CACertificateId) {
            $res['CACertificateId'] = $this->CACertificateId;
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
        if (null !== $this->enableHttp2) {
            $res['EnableHttp2'] = $this->enableHttp2;
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
        if (null !== $this->serverCertificateId) {
            $res['ServerCertificateId'] = $this->serverCertificateId;
        }
        if (null !== $this->stickySession) {
            $res['StickySession'] = $this->stickySession;
        }
        if (null !== $this->stickySessionType) {
            $res['StickySessionType'] = $this->stickySessionType;
        }
        if (null !== $this->TLSCipherPolicy) {
            $res['TLSCipherPolicy'] = $this->TLSCipherPolicy;
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
     * @return SetLoadBalancerHTTPSListenerAttributeRequest
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
        if (isset($map['CACertificateId'])) {
            $model->CACertificateId = $map['CACertificateId'];
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
        if (isset($map['EnableHttp2'])) {
            $model->enableHttp2 = $map['EnableHttp2'];
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
        if (isset($map['ServerCertificateId'])) {
            $model->serverCertificateId = $map['ServerCertificateId'];
        }
        if (isset($map['StickySession'])) {
            $model->stickySession = $map['StickySession'];
        }
        if (isset($map['StickySessionType'])) {
            $model->stickySessionType = $map['StickySessionType'];
        }
        if (isset($map['TLSCipherPolicy'])) {
            $model->TLSCipherPolicy = $map['TLSCipherPolicy'];
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
