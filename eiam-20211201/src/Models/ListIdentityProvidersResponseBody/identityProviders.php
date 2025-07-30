<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListIdentityProvidersResponseBody;

use AlibabaCloud\Tea\Model;

class identityProviders extends Model
{
    /**
     * @description Advanced configuration capabilities
     *
     * @example disabled
     *
     * @var string
     */
    public $advancedStatus;

    /**
     * @description Authentication source product.
     * - urn:alibaba:idaas:idp:okta:okta
     * - urn:alibaba:idaas:idp:google:account
     * - urn:alibaba:idaas:idp:microsoft:aad
     * - urn:alibaba:idaas:idp:microsoft:ad
     * - urn:alibaba:idaas:idp:bytedance:lark
     * - urn:alibaba:idaas:idp:unknown:ldap
     * - urn:alibaba:idaas:idp:alibaba:idaas
     * - urn:alibaba:idaas:idp:tencent:wecom
     * - urn:alibaba:idaas:idp:alibaba:aliyunram
     *
     * @example urn:alibaba:idaas:idp:bytedance:lark
     *
     * @var string
     */
    public $authnSourceSupplier;

    /**
     * @description Authentication method type.
     * - urn:alibaba:idaas:authntype:oidc
     * - urn:alibaba:idaas:authntype:saml2
     *
     * @example urn:alibaba:idaas:authntype:oidc
     *
     * @var string
     */
    public $authnSourceType;

    /**
     * @description Does the corresponding IdP support authentication.
     *
     * @example disabled
     *
     * @var string
     */
    public $authnStatus;

    /**
     * @description The time when the instance was created.
     *
     * @example 1712561597000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The description of the Identity provider.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description Identity provider external ID.
     *
     * @example test_123xxx
     *
     * @var string
     */
    public $identityProviderExternalId;

    /**
     * @description Identity provider ID.
     *
     * @example idp_m5b5wd5s2hpq4t6iaehhXXX
     *
     * @var string
     */
    public $identityProviderId;

    /**
     * @description Identity provider name.
     *
     * @example ceshi
     *
     * @var string
     */
    public $identityProviderName;

    /**
     * @description Identity provider synchronization type.
     *
     * - Inbound to DingTalk: urn:alibaba:idaas:idp:alibaba:dingtalk:pull
     *
     * - Outbound to DingTalk: urn:alibaba:idaas:idp:alibaba:dingtalk:push
     *
     * - Inbound to WeCom: urn:alibaba:idaas:idp:tencent:wecom:pull
     *
     * - Inbound to Lark: urn:alibaba:idaas:idp:bytedance:lark:pull
     *
     * - Inbound to AD: urn:alibaba:idaas:idp:microsoft:ad:pull
     *
     * - Inbound to LDAP: urn:alibaba:idaas:idp:unknown:ldap:pull
     *
     * - Standard OIDC: urn:alibaba:idaas:idp:standard:oidc
     *
     * - SASE Custom OIDC: urn:alibaba:idaas:idp:alibaba:sase
     *
     * @example urn:alibaba:idaas:idp:bytedance:lark:pull
     *
     * @var string
     */
    public $identityProviderType;

    /**
     * @description Incremental callback status, whether to process the incremental callback data from IdP.
     *
     * @example enabled
     *
     * @var string
     */
    public $incrementalCallbackStatus;

    /**
     * @description The instance ID.
     *
     * @example idaas_pbf4dth34l2qb7mydpntXXX
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Last status check result.
     *
     * @example success
     *
     * @var string
     */
    public $lastStatusCheckJobResult;

    /**
     * @description The reason why write operations are locked.
     *
     * @example ConfigNotReady.UuidIsNul
     *
     * @var string
     */
    public $lockReason;

    /**
     * @description IdP logo url.
     *
     * @example https://cdn-cn-hangzhou.aliyunidaas.com/xx/logos/xx
     *
     * @var string
     */
    public $logoUrl;

    /**
     * @description Regular verification status.
     *
     * @example disabled
     *
     * @var string
     */
    public $periodicSyncStatus;

    /**
     * @description Whether support UD synchronization.Values:
     * - enabled
     * - disabled
     *
     * @example disabled
     *
     * @var string
     */
    public $udPullStatus;

    /**
     * @description When supporting the range in the UD of ud_pullIDaaS side.
     *
     * @example ou_2buqmxsa3ltyqkjgpwfijurXXX
     *
     * @var string
     */
    public $udPullTargetScope;

    /**
     * @description Synchronize capabilities
     *
     * @example disabled
     *
     * @var string
     */
    public $udPushStatus;

    /**
     * @description The time when the service was updated.
     *
     * @example 1712561597000
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'advancedStatus' => 'AdvancedStatus',
        'authnSourceSupplier' => 'AuthnSourceSupplier',
        'authnSourceType' => 'AuthnSourceType',
        'authnStatus' => 'AuthnStatus',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'identityProviderExternalId' => 'IdentityProviderExternalId',
        'identityProviderId' => 'IdentityProviderId',
        'identityProviderName' => 'IdentityProviderName',
        'identityProviderType' => 'IdentityProviderType',
        'incrementalCallbackStatus' => 'IncrementalCallbackStatus',
        'instanceId' => 'InstanceId',
        'lastStatusCheckJobResult' => 'LastStatusCheckJobResult',
        'lockReason' => 'LockReason',
        'logoUrl' => 'LogoUrl',
        'periodicSyncStatus' => 'PeriodicSyncStatus',
        'udPullStatus' => 'UdPullStatus',
        'udPullTargetScope' => 'UdPullTargetScope',
        'udPushStatus' => 'UdPushStatus',
        'updateTime' => 'UpdateTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->advancedStatus) {
            $res['AdvancedStatus'] = $this->advancedStatus;
        }
        if (null !== $this->authnSourceSupplier) {
            $res['AuthnSourceSupplier'] = $this->authnSourceSupplier;
        }
        if (null !== $this->authnSourceType) {
            $res['AuthnSourceType'] = $this->authnSourceType;
        }
        if (null !== $this->authnStatus) {
            $res['AuthnStatus'] = $this->authnStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->identityProviderExternalId) {
            $res['IdentityProviderExternalId'] = $this->identityProviderExternalId;
        }
        if (null !== $this->identityProviderId) {
            $res['IdentityProviderId'] = $this->identityProviderId;
        }
        if (null !== $this->identityProviderName) {
            $res['IdentityProviderName'] = $this->identityProviderName;
        }
        if (null !== $this->identityProviderType) {
            $res['IdentityProviderType'] = $this->identityProviderType;
        }
        if (null !== $this->incrementalCallbackStatus) {
            $res['IncrementalCallbackStatus'] = $this->incrementalCallbackStatus;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lastStatusCheckJobResult) {
            $res['LastStatusCheckJobResult'] = $this->lastStatusCheckJobResult;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->logoUrl) {
            $res['LogoUrl'] = $this->logoUrl;
        }
        if (null !== $this->periodicSyncStatus) {
            $res['PeriodicSyncStatus'] = $this->periodicSyncStatus;
        }
        if (null !== $this->udPullStatus) {
            $res['UdPullStatus'] = $this->udPullStatus;
        }
        if (null !== $this->udPullTargetScope) {
            $res['UdPullTargetScope'] = $this->udPullTargetScope;
        }
        if (null !== $this->udPushStatus) {
            $res['UdPushStatus'] = $this->udPushStatus;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return identityProviders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdvancedStatus'])) {
            $model->advancedStatus = $map['AdvancedStatus'];
        }
        if (isset($map['AuthnSourceSupplier'])) {
            $model->authnSourceSupplier = $map['AuthnSourceSupplier'];
        }
        if (isset($map['AuthnSourceType'])) {
            $model->authnSourceType = $map['AuthnSourceType'];
        }
        if (isset($map['AuthnStatus'])) {
            $model->authnStatus = $map['AuthnStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IdentityProviderExternalId'])) {
            $model->identityProviderExternalId = $map['IdentityProviderExternalId'];
        }
        if (isset($map['IdentityProviderId'])) {
            $model->identityProviderId = $map['IdentityProviderId'];
        }
        if (isset($map['IdentityProviderName'])) {
            $model->identityProviderName = $map['IdentityProviderName'];
        }
        if (isset($map['IdentityProviderType'])) {
            $model->identityProviderType = $map['IdentityProviderType'];
        }
        if (isset($map['IncrementalCallbackStatus'])) {
            $model->incrementalCallbackStatus = $map['IncrementalCallbackStatus'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LastStatusCheckJobResult'])) {
            $model->lastStatusCheckJobResult = $map['LastStatusCheckJobResult'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['LogoUrl'])) {
            $model->logoUrl = $map['LogoUrl'];
        }
        if (isset($map['PeriodicSyncStatus'])) {
            $model->periodicSyncStatus = $map['PeriodicSyncStatus'];
        }
        if (isset($map['UdPullStatus'])) {
            $model->udPullStatus = $map['UdPullStatus'];
        }
        if (isset($map['UdPullTargetScope'])) {
            $model->udPullTargetScope = $map['UdPullTargetScope'];
        }
        if (isset($map['UdPushStatus'])) {
            $model->udPushStatus = $map['UdPushStatus'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
