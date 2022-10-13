<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class GenerateUploadUrlRequest extends Model
{
    /**
     * @var string
     */
    public $callerBid;

    /**
     * @var string
     */
    public $callerIp;

    /**
     * @var int
     */
    public $callerParentId;

    /**
     * @var string
     */
    public $callerType;

    /**
     * @var int
     */
    public $callerUid;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var int
     */
    public $environment;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $instanceOwnerId;

    /**
     * @var string
     */
    public $key;

    /**
     * @var bool
     */
    public $mfaPresent;

    /**
     * @var bool
     */
    public $proxyOriginalSecurityTransport;

    /**
     * @var string
     */
    public $proxyOriginalSourceIp;

    /**
     * @var bool
     */
    public $proxyTrustTransportInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var bool
     */
    public $securityTransport;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $tenantName;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var int
     */
    public $xspaceServicerId;

    /**
     * @var int
     */
    public $xspaceTenantBuId;
    protected $_name = [
        'callerBid'                      => 'CallerBid',
        'callerIp'                       => 'CallerIp',
        'callerParentId'                 => 'CallerParentId',
        'callerType'                     => 'CallerType',
        'callerUid'                      => 'CallerUid',
        'clientIp'                       => 'ClientIp',
        'environment'                    => 'Environment',
        'fileName'                       => 'FileName',
        'instanceId'                     => 'InstanceId',
        'instanceOwnerId'                => 'InstanceOwnerId',
        'key'                            => 'Key',
        'mfaPresent'                     => 'MfaPresent',
        'proxyOriginalSecurityTransport' => 'ProxyOriginalSecurityTransport',
        'proxyOriginalSourceIp'          => 'ProxyOriginalSourceIp',
        'proxyTrustTransportInfo'        => 'ProxyTrustTransportInfo',
        'requestId'                      => 'RequestId',
        'securityToken'                  => 'SecurityToken',
        'securityTransport'              => 'SecurityTransport',
        'tenantId'                       => 'TenantId',
        'tenantName'                     => 'TenantName',
        'userId'                         => 'UserId',
        'userName'                       => 'UserName',
        'xspaceServicerId'               => 'XspaceServicerId',
        'xspaceTenantBuId'               => 'XspaceTenantBuId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callerBid) {
            $res['CallerBid'] = $this->callerBid;
        }
        if (null !== $this->callerIp) {
            $res['CallerIp'] = $this->callerIp;
        }
        if (null !== $this->callerParentId) {
            $res['CallerParentId'] = $this->callerParentId;
        }
        if (null !== $this->callerType) {
            $res['CallerType'] = $this->callerType;
        }
        if (null !== $this->callerUid) {
            $res['CallerUid'] = $this->callerUid;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->environment) {
            $res['Environment'] = $this->environment;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceOwnerId) {
            $res['InstanceOwnerId'] = $this->instanceOwnerId;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->mfaPresent) {
            $res['MfaPresent'] = $this->mfaPresent;
        }
        if (null !== $this->proxyOriginalSecurityTransport) {
            $res['ProxyOriginalSecurityTransport'] = $this->proxyOriginalSecurityTransport;
        }
        if (null !== $this->proxyOriginalSourceIp) {
            $res['ProxyOriginalSourceIp'] = $this->proxyOriginalSourceIp;
        }
        if (null !== $this->proxyTrustTransportInfo) {
            $res['ProxyTrustTransportInfo'] = $this->proxyTrustTransportInfo;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->securityTransport) {
            $res['SecurityTransport'] = $this->securityTransport;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->xspaceServicerId) {
            $res['XspaceServicerId'] = $this->xspaceServicerId;
        }
        if (null !== $this->xspaceTenantBuId) {
            $res['XspaceTenantBuId'] = $this->xspaceTenantBuId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateUploadUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallerBid'])) {
            $model->callerBid = $map['CallerBid'];
        }
        if (isset($map['CallerIp'])) {
            $model->callerIp = $map['CallerIp'];
        }
        if (isset($map['CallerParentId'])) {
            $model->callerParentId = $map['CallerParentId'];
        }
        if (isset($map['CallerType'])) {
            $model->callerType = $map['CallerType'];
        }
        if (isset($map['CallerUid'])) {
            $model->callerUid = $map['CallerUid'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['Environment'])) {
            $model->environment = $map['Environment'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceOwnerId'])) {
            $model->instanceOwnerId = $map['InstanceOwnerId'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['MfaPresent'])) {
            $model->mfaPresent = $map['MfaPresent'];
        }
        if (isset($map['ProxyOriginalSecurityTransport'])) {
            $model->proxyOriginalSecurityTransport = $map['ProxyOriginalSecurityTransport'];
        }
        if (isset($map['ProxyOriginalSourceIp'])) {
            $model->proxyOriginalSourceIp = $map['ProxyOriginalSourceIp'];
        }
        if (isset($map['ProxyTrustTransportInfo'])) {
            $model->proxyTrustTransportInfo = $map['ProxyTrustTransportInfo'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['SecurityTransport'])) {
            $model->securityTransport = $map['SecurityTransport'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['XspaceServicerId'])) {
            $model->xspaceServicerId = $map['XspaceServicerId'];
        }
        if (isset($map['XspaceTenantBuId'])) {
            $model->xspaceTenantBuId = $map['XspaceTenantBuId'];
        }

        return $model;
    }
}
