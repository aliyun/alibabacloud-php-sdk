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
     * @description 高阶配置能力
     *
     * @example disabled
     *
     * @var string
     */
    public $advancedStatus;

    /**
     * @description IDaaS EIAM 对应的认证来源产品，okta or google or azure ad
     *
     * @example urn:alibaba:idaas:idp:bytedance:lark
     *
     * @var string
     */
    public $authnSourceSupplier;

    /**
     * @description IDaaS EIAM 认证方式类型 oidc or saml
     *
     * @example urn:alibaba:idaas:authntype:oidc
     *
     * @var string
     */
    public $authnSourceType;

    /**
     * @description IDaaS EIAM 对应IdP是否支持认证
     *
     * @example disabled
     *
     * @var string
     */
    public $authnStatus;

    /**
     * @description 创建时间
     *
     * @example 1726021079000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description IDaaS EIAM 身份提供方描述
     *
     * @example for poc test
     *
     * @var string
     */
    public $description;

    /**
     * @description 钉钉基础配置
     *
     * @var dingtalkAppConfig
     */
    public $dingtalkAppConfig;

    /**
     * @description 钉钉同步配置
     *
     * @var dingtalkProvisioningConfig
     */
    public $dingtalkProvisioningConfig;

    /**
     * @description IDaaS EIAM 身份提供方外部ID
     *
     * @example idp_xxxx
     *
     * @var string
     */
    public $identityProviderExternalId;

    /**
     * @description IDaaS EIAM 身份提供方ID
     *
     * @example idp_mwpcwnhrimlr2horx7xgg7pp7y
     *
     * @var string
     */
    public $identityProviderId;

    /**
     * @description IDaaS EIAM 身份提供方名称
     *
     * @example test
     *
     * @var string
     */
    public $identityProviderName;

    /**
     * @description 身份提供方同步类型
     *
     * @example urn:alibaba:idaas:idp:alibaba:dingtalk:push
     *
     * @var string
     */
    public $identityProviderType;

    /**
     * @description IDaaS EIAM 实例Id
     *
     * @example idaas_x2df3bak3uwnapqm6xxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 飞书配置
     *
     * @var larkConfig
     */
    public $larkConfig;

    /**
     * @description 最后一次状态检查结果
     *
     * @example success
     *
     * @var string
     */
    public $lastStatusCheckJobResult;

    /**
     * @description AD/LDAP身份提供方相关信息
     *
     * @var ldapConfig
     */
    public $ldapConfig;

    /**
     * @description 锁定原因
     *
     * @example financial
     *
     * @var string
     */
    public $lockReason;

    /**
     * @var string
     */
    public $logoUrl;

    /**
     * @description 网络端点ID
     *
     * @example nae_mx4vsadfe6govkqkwckxxxx
     *
     * @var string
     */
    public $networkAccessEndpointId;

    /**
     * @description OIDC IdP配置。
     *
     * @var oidcConfig
     */
    public $oidcConfig;

    /**
     * @description 同步入配置
     *
     * @var udPullConfig
     */
    public $udPullConfig;

    /**
     * @description IDaaS EIAM 是否支持UD同步
     *
     * @example disabled
     *
     * @var string
     */
    public $udPullStatus;

    /**
     * @description 同步出配置
     *
     * @var udPushConfig
     */
    public $udPushConfig;

    /**
     * @description 同步出能力
     *
     * @example disabled
     *
     * @var string
     */
    public $udPushStatus;

    /**
     * @description 更新时间
     *
     * @example 1726021079000
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description 企业微信
     *
     * @var weComConfig
     */
    public $weComConfig;
    protected $_name = [
        'advancedStatus'             => 'AdvancedStatus',
        'authnSourceSupplier'        => 'AuthnSourceSupplier',
        'authnSourceType'            => 'AuthnSourceType',
        'authnStatus'                => 'AuthnStatus',
        'createTime'                 => 'CreateTime',
        'description'                => 'Description',
        'dingtalkAppConfig'          => 'DingtalkAppConfig',
        'dingtalkProvisioningConfig' => 'DingtalkProvisioningConfig',
        'identityProviderExternalId' => 'IdentityProviderExternalId',
        'identityProviderId'         => 'IdentityProviderId',
        'identityProviderName'       => 'IdentityProviderName',
        'identityProviderType'       => 'IdentityProviderType',
        'instanceId'                 => 'InstanceId',
        'larkConfig'                 => 'LarkConfig',
        'lastStatusCheckJobResult'   => 'LastStatusCheckJobResult',
        'ldapConfig'                 => 'LdapConfig',
        'lockReason'                 => 'LockReason',
        'logoUrl'                    => 'LogoUrl',
        'networkAccessEndpointId'    => 'NetworkAccessEndpointId',
        'oidcConfig'                 => 'OidcConfig',
        'udPullConfig'               => 'UdPullConfig',
        'udPullStatus'               => 'UdPullStatus',
        'udPushConfig'               => 'UdPushConfig',
        'udPushStatus'               => 'UdPushStatus',
        'updateTime'                 => 'UpdateTime',
        'weComConfig'                => 'WeComConfig',
    ];

    public function validate()
    {
    }

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
