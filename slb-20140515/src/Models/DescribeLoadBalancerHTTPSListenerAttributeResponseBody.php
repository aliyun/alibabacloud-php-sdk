<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerHTTPSListenerAttributeResponseBody\domainExtensions;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerHTTPSListenerAttributeResponseBody\rules;
use AlibabaCloud\Tea\Model;

class DescribeLoadBalancerHTTPSListenerAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $aclType;

    /**
     * @var string
     */
    public $XForwardedFor_ClientCertClientVerify;

    /**
     * @var string
     */
    public $CACertificateId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @var int
     */
    public $backendServerPort;

    /**
     * @var int
     */
    public $cookieTimeout;

    /**
     * @var string
     */
    public $healthCheckDomain;

    /**
     * @var string
     */
    public $XForwardedFor;

    /**
     * @var string
     */
    public $XForwardedFor_ClientCertFingerprint;

    /**
     * @var int
     */
    public $idleTimeout;

    /**
     * @var int
     */
    public $listenerPort;

    /**
     * @var string
     */
    public $healthCheckURI;

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
    public $scheduler;

    /**
     * @var string
     */
    public $XForwardedFor_proto;

    /**
     * @var string
     */
    public $TLSCipherPolicy;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $VServerGroupId;

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
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $description;

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
    public $securityStatus;

    /**
     * @var string
     */
    public $healthCheckHttpCode;

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
    public $serverCertificateId;

    /**
     * @var string
     */
    public $aclId;

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
    public $XForwardedFor_SLBIP;

    /**
     * @var string
     */
    public $stickySession;

    /**
     * @var string
     */
    public $healthCheck;

    /**
     * @var rules
     */
    public $rules;

    /**
     * @var domainExtensions
     */
    public $domainExtensions;
    protected $_name = [
        'aclType'                              => 'AclType',
        'XForwardedFor_ClientCertClientVerify' => 'XForwardedFor_ClientCertClientVerify',
        'CACertificateId'                      => 'CACertificateId',
        'requestId'                            => 'RequestId',
        'healthCheckConnectPort'               => 'HealthCheckConnectPort',
        'backendServerPort'                    => 'BackendServerPort',
        'cookieTimeout'                        => 'CookieTimeout',
        'healthCheckDomain'                    => 'HealthCheckDomain',
        'XForwardedFor'                        => 'XForwardedFor',
        'XForwardedFor_ClientCertFingerprint'  => 'XForwardedFor_ClientCertFingerprint',
        'idleTimeout'                          => 'IdleTimeout',
        'listenerPort'                         => 'ListenerPort',
        'healthCheckURI'                       => 'HealthCheckURI',
        'XForwardedFor_SLBPORT'                => 'XForwardedFor_SLBPORT',
        'stickySessionType'                    => 'StickySessionType',
        'scheduler'                            => 'Scheduler',
        'XForwardedFor_proto'                  => 'XForwardedFor_proto',
        'TLSCipherPolicy'                      => 'TLSCipherPolicy',
        'status'                               => 'Status',
        'VServerGroupId'                       => 'VServerGroupId',
        'XForwardedFor_ClientSrcPort'          => 'XForwardedFor_ClientSrcPort',
        'cookie'                               => 'Cookie',
        'gzip'                                 => 'Gzip',
        'enableHttp2'                          => 'EnableHttp2',
        'bandwidth'                            => 'Bandwidth',
        'description'                          => 'Description',
        'healthCheckTimeout'                   => 'HealthCheckTimeout',
        'aclStatus'                            => 'AclStatus',
        'unhealthyThreshold'                   => 'UnhealthyThreshold',
        'XForwardedFor_SLBID'                  => 'XForwardedFor_SLBID',
        'XForwardedFor_ClientCertSubjectDN'    => 'XForwardedFor_ClientCertSubjectDN',
        'securityStatus'                       => 'SecurityStatus',
        'healthCheckHttpCode'                  => 'HealthCheckHttpCode',
        'requestTimeout'                       => 'RequestTimeout',
        'healthCheckInterval'                  => 'HealthCheckInterval',
        'serverCertificateId'                  => 'ServerCertificateId',
        'aclId'                                => 'AclId',
        'XForwardedFor_ClientCertIssuerDN'     => 'XForwardedFor_ClientCertIssuerDN',
        'healthyThreshold'                     => 'HealthyThreshold',
        'XForwardedFor_SLBIP'                  => 'XForwardedFor_SLBIP',
        'stickySession'                        => 'StickySession',
        'healthCheck'                          => 'HealthCheck',
        'rules'                                => 'Rules',
        'domainExtensions'                     => 'DomainExtensions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclType) {
            $res['AclType'] = $this->aclType;
        }
        if (null !== $this->XForwardedFor_ClientCertClientVerify) {
            $res['XForwardedFor_ClientCertClientVerify'] = $this->XForwardedFor_ClientCertClientVerify;
        }
        if (null !== $this->CACertificateId) {
            $res['CACertificateId'] = $this->CACertificateId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->healthCheckConnectPort) {
            $res['HealthCheckConnectPort'] = $this->healthCheckConnectPort;
        }
        if (null !== $this->backendServerPort) {
            $res['BackendServerPort'] = $this->backendServerPort;
        }
        if (null !== $this->cookieTimeout) {
            $res['CookieTimeout'] = $this->cookieTimeout;
        }
        if (null !== $this->healthCheckDomain) {
            $res['HealthCheckDomain'] = $this->healthCheckDomain;
        }
        if (null !== $this->XForwardedFor) {
            $res['XForwardedFor'] = $this->XForwardedFor;
        }
        if (null !== $this->XForwardedFor_ClientCertFingerprint) {
            $res['XForwardedFor_ClientCertFingerprint'] = $this->XForwardedFor_ClientCertFingerprint;
        }
        if (null !== $this->idleTimeout) {
            $res['IdleTimeout'] = $this->idleTimeout;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->healthCheckURI) {
            $res['HealthCheckURI'] = $this->healthCheckURI;
        }
        if (null !== $this->XForwardedFor_SLBPORT) {
            $res['XForwardedFor_SLBPORT'] = $this->XForwardedFor_SLBPORT;
        }
        if (null !== $this->stickySessionType) {
            $res['StickySessionType'] = $this->stickySessionType;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }
        if (null !== $this->XForwardedFor_proto) {
            $res['XForwardedFor_proto'] = $this->XForwardedFor_proto;
        }
        if (null !== $this->TLSCipherPolicy) {
            $res['TLSCipherPolicy'] = $this->TLSCipherPolicy;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
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
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->healthCheckTimeout) {
            $res['HealthCheckTimeout'] = $this->healthCheckTimeout;
        }
        if (null !== $this->aclStatus) {
            $res['AclStatus'] = $this->aclStatus;
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
        if (null !== $this->securityStatus) {
            $res['SecurityStatus'] = $this->securityStatus;
        }
        if (null !== $this->healthCheckHttpCode) {
            $res['HealthCheckHttpCode'] = $this->healthCheckHttpCode;
        }
        if (null !== $this->requestTimeout) {
            $res['RequestTimeout'] = $this->requestTimeout;
        }
        if (null !== $this->healthCheckInterval) {
            $res['HealthCheckInterval'] = $this->healthCheckInterval;
        }
        if (null !== $this->serverCertificateId) {
            $res['ServerCertificateId'] = $this->serverCertificateId;
        }
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->XForwardedFor_ClientCertIssuerDN) {
            $res['XForwardedFor_ClientCertIssuerDN'] = $this->XForwardedFor_ClientCertIssuerDN;
        }
        if (null !== $this->healthyThreshold) {
            $res['HealthyThreshold'] = $this->healthyThreshold;
        }
        if (null !== $this->XForwardedFor_SLBIP) {
            $res['XForwardedFor_SLBIP'] = $this->XForwardedFor_SLBIP;
        }
        if (null !== $this->stickySession) {
            $res['StickySession'] = $this->stickySession;
        }
        if (null !== $this->healthCheck) {
            $res['HealthCheck'] = $this->healthCheck;
        }
        if (null !== $this->rules) {
            $res['Rules'] = null !== $this->rules ? $this->rules->toMap() : null;
        }
        if (null !== $this->domainExtensions) {
            $res['DomainExtensions'] = null !== $this->domainExtensions ? $this->domainExtensions->toMap() : null;
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
        if (isset($map['AclType'])) {
            $model->aclType = $map['AclType'];
        }
        if (isset($map['XForwardedFor_ClientCertClientVerify'])) {
            $model->XForwardedFor_ClientCertClientVerify = $map['XForwardedFor_ClientCertClientVerify'];
        }
        if (isset($map['CACertificateId'])) {
            $model->CACertificateId = $map['CACertificateId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HealthCheckConnectPort'])) {
            $model->healthCheckConnectPort = $map['HealthCheckConnectPort'];
        }
        if (isset($map['BackendServerPort'])) {
            $model->backendServerPort = $map['BackendServerPort'];
        }
        if (isset($map['CookieTimeout'])) {
            $model->cookieTimeout = $map['CookieTimeout'];
        }
        if (isset($map['HealthCheckDomain'])) {
            $model->healthCheckDomain = $map['HealthCheckDomain'];
        }
        if (isset($map['XForwardedFor'])) {
            $model->XForwardedFor = $map['XForwardedFor'];
        }
        if (isset($map['XForwardedFor_ClientCertFingerprint'])) {
            $model->XForwardedFor_ClientCertFingerprint = $map['XForwardedFor_ClientCertFingerprint'];
        }
        if (isset($map['IdleTimeout'])) {
            $model->idleTimeout = $map['IdleTimeout'];
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['HealthCheckURI'])) {
            $model->healthCheckURI = $map['HealthCheckURI'];
        }
        if (isset($map['XForwardedFor_SLBPORT'])) {
            $model->XForwardedFor_SLBPORT = $map['XForwardedFor_SLBPORT'];
        }
        if (isset($map['StickySessionType'])) {
            $model->stickySessionType = $map['StickySessionType'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }
        if (isset($map['XForwardedFor_proto'])) {
            $model->XForwardedFor_proto = $map['XForwardedFor_proto'];
        }
        if (isset($map['TLSCipherPolicy'])) {
            $model->TLSCipherPolicy = $map['TLSCipherPolicy'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
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
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['HealthCheckTimeout'])) {
            $model->healthCheckTimeout = $map['HealthCheckTimeout'];
        }
        if (isset($map['AclStatus'])) {
            $model->aclStatus = $map['AclStatus'];
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
        if (isset($map['SecurityStatus'])) {
            $model->securityStatus = $map['SecurityStatus'];
        }
        if (isset($map['HealthCheckHttpCode'])) {
            $model->healthCheckHttpCode = $map['HealthCheckHttpCode'];
        }
        if (isset($map['RequestTimeout'])) {
            $model->requestTimeout = $map['RequestTimeout'];
        }
        if (isset($map['HealthCheckInterval'])) {
            $model->healthCheckInterval = $map['HealthCheckInterval'];
        }
        if (isset($map['ServerCertificateId'])) {
            $model->serverCertificateId = $map['ServerCertificateId'];
        }
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['XForwardedFor_ClientCertIssuerDN'])) {
            $model->XForwardedFor_ClientCertIssuerDN = $map['XForwardedFor_ClientCertIssuerDN'];
        }
        if (isset($map['HealthyThreshold'])) {
            $model->healthyThreshold = $map['HealthyThreshold'];
        }
        if (isset($map['XForwardedFor_SLBIP'])) {
            $model->XForwardedFor_SLBIP = $map['XForwardedFor_SLBIP'];
        }
        if (isset($map['StickySession'])) {
            $model->stickySession = $map['StickySession'];
        }
        if (isset($map['HealthCheck'])) {
            $model->healthCheck = $map['HealthCheck'];
        }
        if (isset($map['Rules'])) {
            $model->rules = rules::fromMap($map['Rules']);
        }
        if (isset($map['DomainExtensions'])) {
            $model->domainExtensions = domainExtensions::fromMap($map['DomainExtensions']);
        }

        return $model;
    }
}
