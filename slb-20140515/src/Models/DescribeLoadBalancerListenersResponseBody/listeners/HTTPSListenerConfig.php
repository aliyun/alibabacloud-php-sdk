<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerListenersResponseBody\listeners;

use AlibabaCloud\Tea\Model;

class HTTPSListenerConfig extends Model
{
    /**
     * @var string
     */
    public $XForwardedFor_ClientCertClientVerify;

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
     * @var string
     */
    public $enableHttp2;

    /**
     * @var string
     */
    public $CACertificateId;

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
     * @var string
     */
    public $XForwardedFor_ClientCertSubjectDN;

    /**
     * @var string
     */
    public $healthCheckHttpCode;

    /**
     * @var string
     */
    public $XForwardedFor_ClientCertFingerprint;

    /**
     * @var string
     */
    public $XForwardedFor;

    /**
     * @var int
     */
    public $requestTimeout;

    /**
     * @var int
     */
    public $idleTimeout;

    /**
     * @var string
     */
    public $serverCertificateId;

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
     * @var string
     */
    public $XForwardedFor_ClientCertIssuerDN;

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
    public $TLSCipherPolicy;

    /**
     * @var string
     */
    public $healthCheck;
    protected $_name = [
        'XForwardedFor_ClientCertClientVerify' => 'XForwardedFor_ClientCertClientVerify',
        'healthCheckHttpVersion'               => 'HealthCheckHttpVersion',
        'XForwardedFor_ClientSrcPort'          => 'XForwardedFor_ClientSrcPort',
        'cookie'                               => 'Cookie',
        'gzip'                                 => 'Gzip',
        'enableHttp2'                          => 'EnableHttp2',
        'CACertificateId'                      => 'CACertificateId',
        'healthCheckConnectPort'               => 'HealthCheckConnectPort',
        'healthCheckTimeout'                   => 'HealthCheckTimeout',
        'healthCheckType'                      => 'HealthCheckType',
        'cookieTimeout'                        => 'CookieTimeout',
        'healthCheckDomain'                    => 'HealthCheckDomain',
        'unhealthyThreshold'                   => 'UnhealthyThreshold',
        'XForwardedFor_SLBID'                  => 'XForwardedFor_SLBID',
        'XForwardedFor_ClientCertSubjectDN'    => 'XForwardedFor_ClientCertSubjectDN',
        'healthCheckHttpCode'                  => 'HealthCheckHttpCode',
        'XForwardedFor_ClientCertFingerprint'  => 'XForwardedFor_ClientCertFingerprint',
        'XForwardedFor'                        => 'XForwardedFor',
        'requestTimeout'                       => 'RequestTimeout',
        'idleTimeout'                          => 'IdleTimeout',
        'serverCertificateId'                  => 'ServerCertificateId',
        'healthCheckInterval'                  => 'HealthCheckInterval',
        'XForwardedFor_SLBPORT'                => 'XForwardedFor_SLBPORT',
        'healthCheckURI'                       => 'HealthCheckURI',
        'stickySessionType'                    => 'StickySessionType',
        'XForwardedFor_ClientCertIssuerDN'     => 'XForwardedFor_ClientCertIssuerDN',
        'healthyThreshold'                     => 'HealthyThreshold',
        'XForwardedFor_proto'                  => 'XForwardedFor_proto',
        'XForwardedFor_SLBIP'                  => 'XForwardedFor_SLBIP',
        'stickySession'                        => 'StickySession',
        'healthCheckMethod'                    => 'HealthCheckMethod',
        'TLSCipherPolicy'                      => 'TLSCipherPolicy',
        'healthCheck'                          => 'HealthCheck',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->XForwardedFor_ClientCertClientVerify) {
            $res['XForwardedFor_ClientCertClientVerify'] = $this->XForwardedFor_ClientCertClientVerify;
        }
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
        if (null !== $this->enableHttp2) {
            $res['EnableHttp2'] = $this->enableHttp2;
        }
        if (null !== $this->CACertificateId) {
            $res['CACertificateId'] = $this->CACertificateId;
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
        if (null !== $this->XForwardedFor_ClientCertSubjectDN) {
            $res['XForwardedFor_ClientCertSubjectDN'] = $this->XForwardedFor_ClientCertSubjectDN;
        }
        if (null !== $this->healthCheckHttpCode) {
            $res['HealthCheckHttpCode'] = $this->healthCheckHttpCode;
        }
        if (null !== $this->XForwardedFor_ClientCertFingerprint) {
            $res['XForwardedFor_ClientCertFingerprint'] = $this->XForwardedFor_ClientCertFingerprint;
        }
        if (null !== $this->XForwardedFor) {
            $res['XForwardedFor'] = $this->XForwardedFor;
        }
        if (null !== $this->requestTimeout) {
            $res['RequestTimeout'] = $this->requestTimeout;
        }
        if (null !== $this->idleTimeout) {
            $res['IdleTimeout'] = $this->idleTimeout;
        }
        if (null !== $this->serverCertificateId) {
            $res['ServerCertificateId'] = $this->serverCertificateId;
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
        if (null !== $this->XForwardedFor_ClientCertIssuerDN) {
            $res['XForwardedFor_ClientCertIssuerDN'] = $this->XForwardedFor_ClientCertIssuerDN;
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
        if (null !== $this->TLSCipherPolicy) {
            $res['TLSCipherPolicy'] = $this->TLSCipherPolicy;
        }
        if (null !== $this->healthCheck) {
            $res['HealthCheck'] = $this->healthCheck;
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
        if (isset($map['XForwardedFor_ClientCertClientVerify'])) {
            $model->XForwardedFor_ClientCertClientVerify = $map['XForwardedFor_ClientCertClientVerify'];
        }
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
        if (isset($map['EnableHttp2'])) {
            $model->enableHttp2 = $map['EnableHttp2'];
        }
        if (isset($map['CACertificateId'])) {
            $model->CACertificateId = $map['CACertificateId'];
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
        if (isset($map['XForwardedFor_ClientCertSubjectDN'])) {
            $model->XForwardedFor_ClientCertSubjectDN = $map['XForwardedFor_ClientCertSubjectDN'];
        }
        if (isset($map['HealthCheckHttpCode'])) {
            $model->healthCheckHttpCode = $map['HealthCheckHttpCode'];
        }
        if (isset($map['XForwardedFor_ClientCertFingerprint'])) {
            $model->XForwardedFor_ClientCertFingerprint = $map['XForwardedFor_ClientCertFingerprint'];
        }
        if (isset($map['XForwardedFor'])) {
            $model->XForwardedFor = $map['XForwardedFor'];
        }
        if (isset($map['RequestTimeout'])) {
            $model->requestTimeout = $map['RequestTimeout'];
        }
        if (isset($map['IdleTimeout'])) {
            $model->idleTimeout = $map['IdleTimeout'];
        }
        if (isset($map['ServerCertificateId'])) {
            $model->serverCertificateId = $map['ServerCertificateId'];
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
        if (isset($map['XForwardedFor_ClientCertIssuerDN'])) {
            $model->XForwardedFor_ClientCertIssuerDN = $map['XForwardedFor_ClientCertIssuerDN'];
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
        if (isset($map['TLSCipherPolicy'])) {
            $model->TLSCipherPolicy = $map['TLSCipherPolicy'];
        }
        if (isset($map['HealthCheck'])) {
            $model->healthCheck = $map['HealthCheck'];
        }

        return $model;
    }
}
