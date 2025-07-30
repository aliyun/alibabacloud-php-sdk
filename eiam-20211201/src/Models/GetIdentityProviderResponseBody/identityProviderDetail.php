<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody;

use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail\dingtalkAppConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail\dingtalkProvisioningConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail\larkConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail\ldapConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail\oidcConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail\udPullConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail\udPushConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail\weComConfig;
use AlibabaCloud\Tea\Model;

class identityProviderDetail extends Model
{
    /**
     * @description Advanced configuration capability.
     * Value range:
     * Disabled: disabled
     * Enable: enabled
     *
     * @example disabled
     *
     * @var string
     */
    public $advancedStatus;

    /**
     * @description The corresponding identity provider product, e.g., Okta, Google, or Azure AD. Possible values:
     *
     * DingTalk: urn:alibaba:idaas:idp:alibaba:dingtalk
     *
     * LDAP: urn:alibaba:idaas:idp:unknown:ldap
     *
     * Alibaba Cloud IDaaS: urn:alibaba:idaas:idp:alibaba:idaas
     *
     * WeCom (Enterprise WeChat): urn:alibaba:idaas:idp:tencent:wecom
     *
     * Lark (Feishu): urn:alibaba:idaas:idp:bytedance:lark
     *
     * Active Directory: urn:alibaba:idaas:idp:microsoft:ad
     *
     * Azure Active Directory: urn:alibaba:idaas:idp:microsoft:aad
     *
     * Alibaba Cloud SASE: urn:alibaba:idaas:idp:alibaba:sase
     *
     * @example urn:alibaba:idaas:idp:bytedance:lark
     *
     * @var string
     */
    public $authnSourceSupplier;

    /**
     * @description Authentication type — OIDC or SAML. Possible values:
     *
     * OIDC: urn:alibaba:idaas:authntype:oidc
     *
     * SAML: urn:alibaba:idaas:authntype:saml2
     *
     * @example urn:alibaba:idaas:authntype:oidc
     *
     * @var string
     */
    public $authnSourceType;

    /**
     * @description Whether the corresponding IdP supports authentication. Value range:
     * Disabled: disabled
     * Enabled: enabled
     *
     * @example disabled
     *
     * @var string
     */
    public $authnStatus;

    /**
     * @description The time when the version was created.
     *
     * @example 1726021079000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description Identity provider description.
     *
     * @example for poc test
     *
     * @var string
     */
    public $description;

    /**
     * @description DingTalk Basic Configuration
     *
     * @var dingtalkAppConfig
     */
    public $dingtalkAppConfig;

    /**
     * @description DingTalk synchronous configuration.
     *
     * @var dingtalkProvisioningConfig
     */
    public $dingtalkProvisioningConfig;

    /**
     * @description Identity provider external ID.
     *
     * @example idp_xxxx
     *
     * @var string
     */
    public $identityProviderExternalId;

    /**
     * @description Identity provider ID.
     *
     * @example idp_mwpcwnhrimlr2horx7xgg7xxxx
     *
     * @var string
     */
    public $identityProviderId;

    /**
     * @description Identity provider name.
     *
     * @example test
     *
     * @var string
     */
    public $identityProviderName;

    /**
     * @description Identity provider type.
     *
     * @example urn:alibaba:idaas:idp:alibaba:dingtalk:push
     *
     * @var string
     */
    public $identityProviderType;

    /**
     * @description Instance ID.
     *
     * @example idaas_x2df3bak3uwnapqm6xxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Lark configuration.
     *
     * @var larkConfig
     */
    public $larkConfig;

    /**
     * @description Last status check result.
     *
     * @example success
     *
     * @var string
     */
    public $lastStatusCheckJobResult;

    /**
     * @description AD/LDAP Identity provider information.
     *
     * @var ldapConfig
     */
    public $ldapConfig;

    /**
     * @description The reason why write operations on the instance are locked.
     *
     * @example financial
     *
     * @var string
     */
    public $lockReason;

    /**
     * @description The URL of the application logo.
     *
     * @example https://img.alicdn.com/imgextra/i4/O1CN01OB8fJj22fpoZm4sd0_!!6000000007148-2-tps-149-xxx.png
     *
     * @var string
     */
    public $logoUrl;

    /**
     * @description The unique identifier of the network access endpoint.
     *
     * @example nae_mx4vsadfe6govkqkwckxxxx
     *
     * @var string
     */
    public $networkAccessEndpointId;

    /**
     * @description OIDC IdP configuration.
     *
     * @var oidcConfig
     */
    public $oidcConfig;

    /**
     * @description Sync in configuration.
     *
     * @var udPullConfig
     */
    public $udPullConfig;

    /**
     * @description Indicates whether the IDaaS EIAM system supports UD (User Directory) synchronization.
     *
     * @example disabled
     *
     * @var string
     */
    public $udPullStatus;

    /**
     * @description Outbound synchronization configuration.
     *
     * @var udPushConfig
     */
    public $udPushConfig;

    /**
     * @description Outbound synchronization capability.
     *
     * @example disabled
     *
     * @var string
     */
    public $udPushStatus;

    /**
     * @description The time when the serviceInstance  was last updated.
     *
     * @example 1726021079000
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description WeCom configuration.
     *
     * @var weComConfig
     */
    public $weComConfig;
    protected $_name = [
        'advancedStatus' => 'AdvancedStatus',
        'authnSourceSupplier' => 'AuthnSourceSupplier',
        'authnSourceType' => 'AuthnSourceType',
        'authnStatus' => 'AuthnStatus',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'dingtalkAppConfig' => 'DingtalkAppConfig',
        'dingtalkProvisioningConfig' => 'DingtalkProvisioningConfig',
        'identityProviderExternalId' => 'IdentityProviderExternalId',
        'identityProviderId' => 'IdentityProviderId',
        'identityProviderName' => 'IdentityProviderName',
        'identityProviderType' => 'IdentityProviderType',
        'instanceId' => 'InstanceId',
        'larkConfig' => 'LarkConfig',
        'lastStatusCheckJobResult' => 'LastStatusCheckJobResult',
        'ldapConfig' => 'LdapConfig',
        'lockReason' => 'LockReason',
        'logoUrl' => 'LogoUrl',
        'networkAccessEndpointId' => 'NetworkAccessEndpointId',
        'oidcConfig' => 'OidcConfig',
        'udPullConfig' => 'UdPullConfig',
        'udPullStatus' => 'UdPullStatus',
        'udPushConfig' => 'UdPushConfig',
        'udPushStatus' => 'UdPushStatus',
        'updateTime' => 'UpdateTime',
        'weComConfig' => 'WeComConfig',
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
        if (null !== $this->dingtalkAppConfig) {
            $res['DingtalkAppConfig'] = null !== $this->dingtalkAppConfig ? $this->dingtalkAppConfig->toMap() : null;
        }
        if (null !== $this->dingtalkProvisioningConfig) {
            $res['DingtalkProvisioningConfig'] = null !== $this->dingtalkProvisioningConfig ? $this->dingtalkProvisioningConfig->toMap() : null;
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->larkConfig) {
            $res['LarkConfig'] = null !== $this->larkConfig ? $this->larkConfig->toMap() : null;
        }
        if (null !== $this->lastStatusCheckJobResult) {
            $res['LastStatusCheckJobResult'] = $this->lastStatusCheckJobResult;
        }
        if (null !== $this->ldapConfig) {
            $res['LdapConfig'] = null !== $this->ldapConfig ? $this->ldapConfig->toMap() : null;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->logoUrl) {
            $res['LogoUrl'] = $this->logoUrl;
        }
        if (null !== $this->networkAccessEndpointId) {
            $res['NetworkAccessEndpointId'] = $this->networkAccessEndpointId;
        }
        if (null !== $this->oidcConfig) {
            $res['OidcConfig'] = null !== $this->oidcConfig ? $this->oidcConfig->toMap() : null;
        }
        if (null !== $this->udPullConfig) {
            $res['UdPullConfig'] = null !== $this->udPullConfig ? $this->udPullConfig->toMap() : null;
        }
        if (null !== $this->udPullStatus) {
            $res['UdPullStatus'] = $this->udPullStatus;
        }
        if (null !== $this->udPushConfig) {
            $res['UdPushConfig'] = null !== $this->udPushConfig ? $this->udPushConfig->toMap() : null;
        }
        if (null !== $this->udPushStatus) {
            $res['UdPushStatus'] = $this->udPushStatus;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->weComConfig) {
            $res['WeComConfig'] = null !== $this->weComConfig ? $this->weComConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return identityProviderDetail
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
        if (isset($map['DingtalkAppConfig'])) {
            $model->dingtalkAppConfig = dingtalkAppConfig::fromMap($map['DingtalkAppConfig']);
        }
        if (isset($map['DingtalkProvisioningConfig'])) {
            $model->dingtalkProvisioningConfig = dingtalkProvisioningConfig::fromMap($map['DingtalkProvisioningConfig']);
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LarkConfig'])) {
            $model->larkConfig = larkConfig::fromMap($map['LarkConfig']);
        }
        if (isset($map['LastStatusCheckJobResult'])) {
            $model->lastStatusCheckJobResult = $map['LastStatusCheckJobResult'];
        }
        if (isset($map['LdapConfig'])) {
            $model->ldapConfig = ldapConfig::fromMap($map['LdapConfig']);
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['LogoUrl'])) {
            $model->logoUrl = $map['LogoUrl'];
        }
        if (isset($map['NetworkAccessEndpointId'])) {
            $model->networkAccessEndpointId = $map['NetworkAccessEndpointId'];
        }
        if (isset($map['OidcConfig'])) {
            $model->oidcConfig = oidcConfig::fromMap($map['OidcConfig']);
        }
        if (isset($map['UdPullConfig'])) {
            $model->udPullConfig = udPullConfig::fromMap($map['UdPullConfig']);
        }
        if (isset($map['UdPullStatus'])) {
            $model->udPullStatus = $map['UdPullStatus'];
        }
        if (isset($map['UdPushConfig'])) {
            $model->udPushConfig = udPushConfig::fromMap($map['UdPushConfig']);
        }
        if (isset($map['UdPushStatus'])) {
            $model->udPushStatus = $map['UdPushStatus'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['WeComConfig'])) {
            $model->weComConfig = weComConfig::fromMap($map['WeComConfig']);
        }

        return $model;
    }
}
