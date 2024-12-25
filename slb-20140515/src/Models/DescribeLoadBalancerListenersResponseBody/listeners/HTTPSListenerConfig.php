<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerListenersResponseBody\listeners;

use AlibabaCloud\Tea\Model;

class HTTPSListenerConfig extends Model
{
    /**
     * @description The ID of the CA certificate.
     *
     * @example idkp-234-cn-test-0****
     *
     * @var string
     */
    public $CACertificateId;

    /**
     * @description The cookie configures for the server.
     *
     * @example B490B5EBF6F3CD402E515D22BCDA****
     *
     * @var string
     */
    public $cookie;

    /**
     * @description The maximum amount of time to wait before the session cookie expires. Unit: seconds.
     *
     * Valid values: **1** to **86400**.
     * @example 500
     *
     * @var int
     */
    public $cookieTimeout;

    /**
     * @description Indicates whether `HTTP 2.0` is enabled. Valid values:
     *
     *   **on**
     *   **off**
     *
     * @example off
     *
     * @var string
     */
    public $enableHttp2;

    /**
     * @description Indicates whether GZIP compression is enabled. Valid values:
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
     * @description Indicates whether the health check feature is enabled. Valid values:
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
     * @example 8080
     *
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @description The domain name that is used for health checks.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $healthCheckDomain;

    /**
     * @description The HTTP status code that indicates a healthy backend server.
     *
     * @example http_2xx,http_3xx
     *
     * @var string
     */
    public $healthCheckHttpCode;

    /**
     * @description The HTTP version for health checks.
     *
     * @example HTTP 1.0
     *
     * @var string
     */
    public $healthCheckHttpVersion;

    /**
     * @description The interval at which health checks are performed. Unit: seconds.
     *
     * @example 5
     *
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @description The health check method.
     *
     * @example get
     *
     * @var string
     */
    public $healthCheckMethod;

    /**
     * @description The timeout period of a health check response. Unit: seconds.
     *
     * @example 3
     *
     * @var int
     */
    public $healthCheckTimeout;

    /**
     * @description The protocol that you want to use for health checks.
     *
     * @example tcp
     *
     * @var string
     */
    public $healthCheckType;

    /**
     * @description The URI that is used for health checks.
     *
     * @example /test/index.html
     *
     * @var string
     */
    public $healthCheckURI;

    /**
     * @description The number of times that an unhealthy backend server must consecutively pass health checks before it is declared healthy. In this case, the health check status of the backend server changes from **fail** to **success**.
     *
     * Valid values: **2** to **10**.
     * @example 4
     *
     * @var int
     */
    public $healthyThreshold;

    /**
     * @description The timeout period of an idle connection. Unit: seconds. Valid values: **1** to **60**.
     *
     * If no request is received within the specified timeout period, CLB closes the connection. When a request is received, CLB establishes a new connection.
     * @example 15
     *
     * @var int
     */
    public $idleTimeout;

    /**
     * @description The request timeout period. Unit: seconds. Valid values: **1** to **180**.
     *
     * If no response is received from a backend server during the request timeout period, CLB sends the `HTTP 504` status code to the client.
     * @example 60
     *
     * @var int
     */
    public $requestTimeout;

    /**
     * @description The ID of the server certificate.
     *
     * @example idkp-123-cn-test-0****
     *
     * @var string
     */
    public $serverCertificateId;

    /**
     * @description Indicates whether session persistence is enabled. Valid values:
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
     * @description The method used to handle the cookie.
     *
     *   **insert**: inserts a cookie. CLB inserts the SERVERID cookie to the HTTP or HTTPS response to the first request from a client. Subsequent requests that carry the SERVERID cookie from the client are forwarded to the same backend server as the first request.
     *   **server**: rewrites the original cookie. CLB rewrites the custom cookies in requests from a client. Subsequent requests from the client that carry the new cookie are forwarded to the same backend server as the first request.
     *
     * @example insert
     *
     * @var string
     */
    public $stickySessionType;

    /**
     * @description A TLS security policy contains TLS protocols and cipher suites available for HTTPS.
     *
     *   **tls_cipher_policy_1_0**:
     *
     * Supported cipher suites: ECDHE-RSA-AES128-GCM-SHA256, ECDHE-RSA-AES256-GCM-SHA384, ECDHE-RSA-AES128-SHA256, ECDHE-RSA-AES256-SHA384, AES128-GCM-SHA256, AES256-GCM-SHA384, AES128-SHA256, AES256-SHA256, ECDHE-RSA-AES128-SHA, ECDHE-RSA-AES256-SHA, AES128-SHA, AES256-SHA, and DES-CBC3-SHA.
     *
     *   **tls_cipher_policy_1_1**:
     *
     * Supported cipher suites: ECDHE-RSA-AES128-GCM-SHA256, ECDHE-RSA-AES256-GCM-SHA384, ECDHE-RSA-AES128-SHA256, ECDHE-RSA-AES256-SHA384, AES128-GCM-SHA256, AES256-GCM-SHA384, AES128-SHA256, AES256-SHA256, ECDHE-RSA-AES128-SHA, ECDHE-RSA-AES256-SHA, AES128-SHA, AES256-SHA, and DES-CBC3-SHA.
     *
     *   **tls_cipher_policy_1_2**
     *
     * Supported cipher suites: ECDHE-RSA-AES128-GCM-SHA256, ECDHE-RSA-AES256-GCM-SHA384, ECDHE-RSA-AES128-SHA256, ECDHE-RSA-AES256-SHA384, AES128-GCM-SHA256, AES256-GCM-SHA384, AES128-SHA256, AES256-SHA256, ECDHE-RSA-AES128-SHA, ECDHE-RSA-AES256-SHA, AES128-SHA, AES256-SHA, and DES-CBC3-SHA.
     *
     *   **tls_cipher_policy_1_2_strict**
     *
     * Supported cipher suites: ECDHE-RSA-AES128-GCM-SHA256, ECDHE-RSA-AES256-GCM-SHA384, ECDHE-RSA-AES128-SHA256, ECDHE-RSA-AES256-SHA384, ECDHE-RSA-AES128-SHA, and ECDHE-RSA-AES256-SHA.
     *
     *   **tls_cipher_policy_1_2_strict_with_1_3**
     *
     * Supported cipher suites: TLS_AES_128_GCM_SHA256, TLS_AES_256_GCM_SHA384, TLS_CHACHA20_POLY1305_SHA256, TLS_AES_128_CCM_SHA256, TLS_AES_128_CCM_8_SHA256, ECDHE-ECDSA-AES128-GCM-SHA256, ECDHE-ECDSA-AES256-GCM-SHA384, ECDHE-ECDSA-AES128-SHA256, ECDHE-ECDSA-AES256-SHA384, ECDHE-RSA-AES128-GCM-SHA256, ECDHE-RSA-AES256-GCM-SHA384, ECDHE-RSA-AES128-SHA256, ECDHE-RSA-AES256-SHA384, ECDHE-ECDSA-AES128-SHA, ECDHE-ECDSA-AES256-SHA, ECDHE-RSA-AES128-SHA, and ECDHE-RSA-AES256-SHA.
     * @example tls_cipher_policy_1_0
     *
     * @var string
     */
    public $TLSCipherPolicy;

    /**
     * @description The number of times that a healthy backend server must consecutively fail health checks before it is declared unhealthy. In this case, the health check status of the backend server changes from **success** to **fail**.
     *
     * Valid values: **2** to **10**.
     * @example 4
     *
     * @var int
     */
    public $unhealthyThreshold;

    /**
     * @description Indicates whether the `X-Forwarded-For` header is used to retrieve client IP addresses. Valid values:
     *
     *   **on**
     *   **off**
     *
     * @example on
     *
     * @var string
     */
    public $XForwardedFor;

    /**
     * @description Indicates whether the `XForwardedFor_ClientCertClientVerify` header is used to obtain the verification result of the client certificate. Valid values:
     *
     *   **on**
     *   **off**
     *
     * @example off
     *
     * @var string
     */
    public $XForwardedFor_ClientCertClientVerify;

    /**
     * @description Indicates whether the `XForwardedFor_ClientCertFingerprint` header is used to obtain the fingerprint of the client certificate. Valid values:
     *
     *   **on**
     *   **off**
     *
     * @example off
     *
     * @var string
     */
    public $XForwardedFor_ClientCertFingerprint;

    /**
     * @description Indicates whether the `XForwardedFor_ClientCertIssuerDN` header is used to obtain information about the authority that issues the client certificate. Valid values:
     *
     *   **on**
     *   **off**
     *
     * @example off
     *
     * @var string
     */
    public $XForwardedFor_ClientCertIssuerDN;

    /**
     * @description Indicates whether the `XForwardedFor_ClientCertSubjectDN` header is used to obtain information about the owner of the client certificate. Valid values:
     *
     *   **on**
     *   **off**
     *
     * @example off
     *
     * @var string
     */
    public $XForwardedFor_ClientCertSubjectDN;

    /**
     * @description Indicates whether the `XForwardedFor_ClientSrcPort` header is used to retrieve the client port. Valid values:
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
     * @description Indicates whether the `SLB-ID` header is used to retrieve the ID of the CLB instance. Valid values:
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
     * @description Indicates whether the `SLB-IP` header is used to retrieve the VIP of the client. Valid values:
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
     * @description Indicates whether the `XForwardedFor_SLBPORT` header is used to retrieve the listener port of the CLB instance. Valid values:
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
     * @description Indicates whether the `X-Forwarded-Proto` header is used to obtain the listener protocol. Valid values:
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
        'CACertificateId'                      => 'CACertificateId',
        'cookie'                               => 'Cookie',
        'cookieTimeout'                        => 'CookieTimeout',
        'enableHttp2'                          => 'EnableHttp2',
        'gzip'                                 => 'Gzip',
        'healthCheck'                          => 'HealthCheck',
        'healthCheckConnectPort'               => 'HealthCheckConnectPort',
        'healthCheckDomain'                    => 'HealthCheckDomain',
        'healthCheckHttpCode'                  => 'HealthCheckHttpCode',
        'healthCheckHttpVersion'               => 'HealthCheckHttpVersion',
        'healthCheckInterval'                  => 'HealthCheckInterval',
        'healthCheckMethod'                    => 'HealthCheckMethod',
        'healthCheckTimeout'                   => 'HealthCheckTimeout',
        'healthCheckType'                      => 'HealthCheckType',
        'healthCheckURI'                       => 'HealthCheckURI',
        'healthyThreshold'                     => 'HealthyThreshold',
        'idleTimeout'                          => 'IdleTimeout',
        'requestTimeout'                       => 'RequestTimeout',
        'serverCertificateId'                  => 'ServerCertificateId',
        'stickySession'                        => 'StickySession',
        'stickySessionType'                    => 'StickySessionType',
        'TLSCipherPolicy'                      => 'TLSCipherPolicy',
        'unhealthyThreshold'                   => 'UnhealthyThreshold',
        'XForwardedFor'                        => 'XForwardedFor',
        'XForwardedFor_ClientCertClientVerify' => 'XForwardedFor_ClientCertClientVerify',
        'XForwardedFor_ClientCertFingerprint'  => 'XForwardedFor_ClientCertFingerprint',
        'XForwardedFor_ClientCertIssuerDN'     => 'XForwardedFor_ClientCertIssuerDN',
        'XForwardedFor_ClientCertSubjectDN'    => 'XForwardedFor_ClientCertSubjectDN',
        'XForwardedFor_ClientSrcPort'          => 'XForwardedFor_ClientSrcPort',
        'XForwardedFor_SLBID'                  => 'XForwardedFor_SLBID',
        'XForwardedFor_SLBIP'                  => 'XForwardedFor_SLBIP',
        'XForwardedFor_SLBPORT'                => 'XForwardedFor_SLBPORT',
        'XForwardedFor_proto'                  => 'XForwardedFor_proto',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CACertificateId) {
            $res['CACertificateId'] = $this->CACertificateId;
        }
        if (null !== $this->cookie) {
            $res['Cookie'] = $this->cookie;
        }
        if (null !== $this->cookieTimeout) {
            $res['CookieTimeout'] = $this->cookieTimeout;
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
        if (null !== $this->healthCheckHttpVersion) {
            $res['HealthCheckHttpVersion'] = $this->healthCheckHttpVersion;
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
        if (null !== $this->healthCheckType) {
            $res['HealthCheckType'] = $this->healthCheckType;
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
        if (null !== $this->requestTimeout) {
            $res['RequestTimeout'] = $this->requestTimeout;
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
        if (null !== $this->XForwardedFor) {
            $res['XForwardedFor'] = $this->XForwardedFor;
        }
        if (null !== $this->XForwardedFor_ClientCertClientVerify) {
            $res['XForwardedFor_ClientCertClientVerify'] = $this->XForwardedFor_ClientCertClientVerify;
        }
        if (null !== $this->XForwardedFor_ClientCertFingerprint) {
            $res['XForwardedFor_ClientCertFingerprint'] = $this->XForwardedFor_ClientCertFingerprint;
        }
        if (null !== $this->XForwardedFor_ClientCertIssuerDN) {
            $res['XForwardedFor_ClientCertIssuerDN'] = $this->XForwardedFor_ClientCertIssuerDN;
        }
        if (null !== $this->XForwardedFor_ClientCertSubjectDN) {
            $res['XForwardedFor_ClientCertSubjectDN'] = $this->XForwardedFor_ClientCertSubjectDN;
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
     * @return HTTPSListenerConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CACertificateId'])) {
            $model->CACertificateId = $map['CACertificateId'];
        }
        if (isset($map['Cookie'])) {
            $model->cookie = $map['Cookie'];
        }
        if (isset($map['CookieTimeout'])) {
            $model->cookieTimeout = $map['CookieTimeout'];
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
        if (isset($map['HealthCheckHttpVersion'])) {
            $model->healthCheckHttpVersion = $map['HealthCheckHttpVersion'];
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
        if (isset($map['HealthCheckType'])) {
            $model->healthCheckType = $map['HealthCheckType'];
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
        if (isset($map['RequestTimeout'])) {
            $model->requestTimeout = $map['RequestTimeout'];
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
        if (isset($map['XForwardedFor'])) {
            $model->XForwardedFor = $map['XForwardedFor'];
        }
        if (isset($map['XForwardedFor_ClientCertClientVerify'])) {
            $model->XForwardedFor_ClientCertClientVerify = $map['XForwardedFor_ClientCertClientVerify'];
        }
        if (isset($map['XForwardedFor_ClientCertFingerprint'])) {
            $model->XForwardedFor_ClientCertFingerprint = $map['XForwardedFor_ClientCertFingerprint'];
        }
        if (isset($map['XForwardedFor_ClientCertIssuerDN'])) {
            $model->XForwardedFor_ClientCertIssuerDN = $map['XForwardedFor_ClientCertIssuerDN'];
        }
        if (isset($map['XForwardedFor_ClientCertSubjectDN'])) {
            $model->XForwardedFor_ClientCertSubjectDN = $map['XForwardedFor_ClientCertSubjectDN'];
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
