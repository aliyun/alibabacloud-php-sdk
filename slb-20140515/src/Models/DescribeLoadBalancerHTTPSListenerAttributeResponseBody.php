<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerHTTPSListenerAttributeResponseBody\domainExtensions;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerHTTPSListenerAttributeResponseBody\rules;
use AlibabaCloud\Tea\Model;

class DescribeLoadBalancerHTTPSListenerAttributeResponseBody extends Model
{
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
    public $healthCheck;

    /**
     * @var domainExtensions
     */
    public $domainExtensions;

    /**
     * @var int
     */
    public $backendServerPort;

    /**
     * @var string
     */
    public $XForwardedFor_SLBPORT;

    /**
     * @var string
     */
    public $stickySessionType;

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
     * @var string
     */
    public $TLSCipherPolicy;

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
    public $CACertificateId;

    /**
     * @var int
     */
    public $healthCheckTimeout;

    /**
     * @var string
     */
    public $aclStatus;

    /**
     * @var int
     */
    public $healthyThreshold;

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

    /**
     * @var string
     */
    public $enableHttp2;

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
     * @var string
     */
    public $scheduler;

    /**
     * @var int
     */
    public $idleTimeout;

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
    public $serverCertificateId;

    /**
     * @var string
     */
    public $XForwardedFor_SLBIP;

    /**
     * @var string
     */
    public $healthCheckHttpCode;

    /**
     * @var int
     */
    public $listenerPort;

    /**
     * @var string
     */
    public $XForwardedFor_ClientCertSubjectDN;

    /**
     * @var string
     */
    public $aclId;

    /**
     * @var rules
     */
    public $rules;

    /**
     * @var string
     */
    public $XForwardedFor_ClientCertIssuerDN;

    /**
     * @var string
     */
    public $stickySession;

    /**
     * @var string
     */
    public $XForwardedFor;

    /**
     * @var string
     */
    public $XForwardedFor_ClientSrcPort;

    /**
     * @var string
     */
    public $XForwardedFor_ClientCertClientVerify;

    /**
     * @var string
     */
    public $XForwardedFor_ClientCertFingerprint;
    protected $_name = [
        'unhealthyThreshold'                   => 'UnhealthyThreshold',
        'healthCheckURI'                       => 'HealthCheckURI',
        'healthCheck'                          => 'HealthCheck',
        'domainExtensions'                     => 'DomainExtensions',
        'backendServerPort'                    => 'BackendServerPort',
        'XForwardedFor_SLBPORT'                => 'XForwardedFor_SLBPORT',
        'stickySessionType'                    => 'StickySessionType',
        'status'                               => 'Status',
        'cookie'                               => 'Cookie',
        'requestTimeout'                       => 'RequestTimeout',
        'TLSCipherPolicy'                      => 'TLSCipherPolicy',
        'healthCheckInterval'                  => 'HealthCheckInterval',
        'requestId'                            => 'RequestId',
        'CACertificateId'                      => 'CACertificateId',
        'healthCheckTimeout'                   => 'HealthCheckTimeout',
        'aclStatus'                            => 'AclStatus',
        'healthyThreshold'                     => 'HealthyThreshold',
        'healthCheckDomain'                    => 'HealthCheckDomain',
        'aclType'                              => 'AclType',
        'XForwardedFor_proto'                  => 'XForwardedFor_proto',
        'enableHttp2'                          => 'EnableHttp2',
        'cookieTimeout'                        => 'CookieTimeout',
        'VServerGroupId'                       => 'VServerGroupId',
        'description'                          => 'Description',
        'scheduler'                            => 'Scheduler',
        'idleTimeout'                          => 'IdleTimeout',
        'XForwardedFor_SLBID'                  => 'XForwardedFor_SLBID',
        'healthCheckConnectPort'               => 'HealthCheckConnectPort',
        'bandwidth'                            => 'Bandwidth',
        'securityStatus'                       => 'SecurityStatus',
        'gzip'                                 => 'Gzip',
        'serverCertificateId'                  => 'ServerCertificateId',
        'XForwardedFor_SLBIP'                  => 'XForwardedFor_SLBIP',
        'healthCheckHttpCode'                  => 'HealthCheckHttpCode',
        'listenerPort'                         => 'ListenerPort',
        'XForwardedFor_ClientCertSubjectDN'    => 'XForwardedFor_ClientCertSubjectDN',
        'aclId'                                => 'AclId',
        'rules'                                => 'Rules',
        'XForwardedFor_ClientCertIssuerDN'     => 'XForwardedFor_ClientCertIssuerDN',
        'stickySession'                        => 'StickySession',
        'XForwardedFor'                        => 'XForwardedFor',
        'XForwardedFor_ClientSrcPort'          => 'XForwardedFor_ClientSrcPort',
        'XForwardedFor_ClientCertClientVerify' => 'XForwardedFor_ClientCertClientVerify',
        'XForwardedFor_ClientCertFingerprint'  => 'XForwardedFor_ClientCertFingerprint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->unhealthyThreshold) {
            $res['UnhealthyThreshold'] = $this->unhealthyThreshold;
        }
        if (null !== $this->healthCheckURI) {
            $res['HealthCheckURI'] = $this->healthCheckURI;
        }
        if (null !== $this->healthCheck) {
            $res['HealthCheck'] = $this->healthCheck;
        }
        if (null !== $this->domainExtensions) {
            $res['DomainExtensions'] = null !== $this->domainExtensions ? $this->domainExtensions->toMap() : null;
        }
        if (null !== $this->backendServerPort) {
            $res['BackendServerPort'] = $this->backendServerPort;
        }
        if (null !== $this->XForwardedFor_SLBPORT) {
            $res['XForwardedFor_SLBPORT'] = $this->XForwardedFor_SLBPORT;
        }
        if (null !== $this->stickySessionType) {
            $res['StickySessionType'] = $this->stickySessionType;
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
        if (null !== $this->TLSCipherPolicy) {
            $res['TLSCipherPolicy'] = $this->TLSCipherPolicy;
        }
        if (null !== $this->healthCheckInterval) {
            $res['HealthCheckInterval'] = $this->healthCheckInterval;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->CACertificateId) {
            $res['CACertificateId'] = $this->CACertificateId;
        }
        if (null !== $this->healthCheckTimeout) {
            $res['HealthCheckTimeout'] = $this->healthCheckTimeout;
        }
        if (null !== $this->aclStatus) {
            $res['AclStatus'] = $this->aclStatus;
        }
        if (null !== $this->healthyThreshold) {
            $res['HealthyThreshold'] = $this->healthyThreshold;
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
        if (null !== $this->enableHttp2) {
            $res['EnableHttp2'] = $this->enableHttp2;
        }
        if (null !== $this->cookieTimeout) {
            $res['CookieTimeout'] = $this->cookieTimeout;
        }
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }
        if (null !== $this->idleTimeout) {
            $res['IdleTimeout'] = $this->idleTimeout;
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
        if (null !== $this->serverCertificateId) {
            $res['ServerCertificateId'] = $this->serverCertificateId;
        }
        if (null !== $this->XForwardedFor_SLBIP) {
            $res['XForwardedFor_SLBIP'] = $this->XForwardedFor_SLBIP;
        }
        if (null !== $this->healthCheckHttpCode) {
            $res['HealthCheckHttpCode'] = $this->healthCheckHttpCode;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->XForwardedFor_ClientCertSubjectDN) {
            $res['XForwardedFor_ClientCertSubjectDN'] = $this->XForwardedFor_ClientCertSubjectDN;
        }
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->rules) {
            $res['Rules'] = null !== $this->rules ? $this->rules->toMap() : null;
        }
        if (null !== $this->XForwardedFor_ClientCertIssuerDN) {
            $res['XForwardedFor_ClientCertIssuerDN'] = $this->XForwardedFor_ClientCertIssuerDN;
        }
        if (null !== $this->stickySession) {
            $res['StickySession'] = $this->stickySession;
        }
        if (null !== $this->XForwardedFor) {
            $res['XForwardedFor'] = $this->XForwardedFor;
        }
        if (null !== $this->XForwardedFor_ClientSrcPort) {
            $res['XForwardedFor_ClientSrcPort'] = $this->XForwardedFor_ClientSrcPort;
        }
        if (null !== $this->XForwardedFor_ClientCertClientVerify) {
            $res['XForwardedFor_ClientCertClientVerify'] = $this->XForwardedFor_ClientCertClientVerify;
        }
        if (null !== $this->XForwardedFor_ClientCertFingerprint) {
            $res['XForwardedFor_ClientCertFingerprint'] = $this->XForwardedFor_ClientCertFingerprint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLoadBalancerHTTPSListenerAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UnhealthyThreshold'])) {
            $model->unhealthyThreshold = $map['UnhealthyThreshold'];
        }
        if (isset($map['HealthCheckURI'])) {
            $model->healthCheckURI = $map['HealthCheckURI'];
        }
        if (isset($map['HealthCheck'])) {
            $model->healthCheck = $map['HealthCheck'];
        }
        if (isset($map['DomainExtensions'])) {
            $model->domainExtensions = domainExtensions::fromMap($map['DomainExtensions']);
        }
        if (isset($map['BackendServerPort'])) {
            $model->backendServerPort = $map['BackendServerPort'];
        }
        if (isset($map['XForwardedFor_SLBPORT'])) {
            $model->XForwardedFor_SLBPORT = $map['XForwardedFor_SLBPORT'];
        }
        if (isset($map['StickySessionType'])) {
            $model->stickySessionType = $map['StickySessionType'];
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
        if (isset($map['TLSCipherPolicy'])) {
            $model->TLSCipherPolicy = $map['TLSCipherPolicy'];
        }
        if (isset($map['HealthCheckInterval'])) {
            $model->healthCheckInterval = $map['HealthCheckInterval'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CACertificateId'])) {
            $model->CACertificateId = $map['CACertificateId'];
        }
        if (isset($map['HealthCheckTimeout'])) {
            $model->healthCheckTimeout = $map['HealthCheckTimeout'];
        }
        if (isset($map['AclStatus'])) {
            $model->aclStatus = $map['AclStatus'];
        }
        if (isset($map['HealthyThreshold'])) {
            $model->healthyThreshold = $map['HealthyThreshold'];
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
        if (isset($map['EnableHttp2'])) {
            $model->enableHttp2 = $map['EnableHttp2'];
        }
        if (isset($map['CookieTimeout'])) {
            $model->cookieTimeout = $map['CookieTimeout'];
        }
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }
        if (isset($map['IdleTimeout'])) {
            $model->idleTimeout = $map['IdleTimeout'];
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
        if (isset($map['ServerCertificateId'])) {
            $model->serverCertificateId = $map['ServerCertificateId'];
        }
        if (isset($map['XForwardedFor_SLBIP'])) {
            $model->XForwardedFor_SLBIP = $map['XForwardedFor_SLBIP'];
        }
        if (isset($map['HealthCheckHttpCode'])) {
            $model->healthCheckHttpCode = $map['HealthCheckHttpCode'];
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['XForwardedFor_ClientCertSubjectDN'])) {
            $model->XForwardedFor_ClientCertSubjectDN = $map['XForwardedFor_ClientCertSubjectDN'];
        }
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['Rules'])) {
            $model->rules = rules::fromMap($map['Rules']);
        }
        if (isset($map['XForwardedFor_ClientCertIssuerDN'])) {
            $model->XForwardedFor_ClientCertIssuerDN = $map['XForwardedFor_ClientCertIssuerDN'];
        }
        if (isset($map['StickySession'])) {
            $model->stickySession = $map['StickySession'];
        }
        if (isset($map['XForwardedFor'])) {
            $model->XForwardedFor = $map['XForwardedFor'];
        }
        if (isset($map['XForwardedFor_ClientSrcPort'])) {
            $model->XForwardedFor_ClientSrcPort = $map['XForwardedFor_ClientSrcPort'];
        }
        if (isset($map['XForwardedFor_ClientCertClientVerify'])) {
            $model->XForwardedFor_ClientCertClientVerify = $map['XForwardedFor_ClientCertClientVerify'];
        }
        if (isset($map['XForwardedFor_ClientCertFingerprint'])) {
            $model->XForwardedFor_ClientCertFingerprint = $map['XForwardedFor_ClientCertFingerprint'];
        }

        return $model;
    }
}
