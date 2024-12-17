<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest\authnConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest\autoCreateUserConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest\autoUpdateUserConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest\bindingConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest\dingtalkAppConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest\larkConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest\ldapConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest\oidcConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest\udPullConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest\udPushConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest\weComConfig;
use AlibabaCloud\Tea\Model;

class CreateIdentityProviderRequest extends Model
{
    /**
     * @description 认证配置
     *
     * @var authnConfig
     */
    public $authnConfig;

    /**
     * @description 自动创建账户账户规则配置。
     *
     * @var autoCreateUserConfig
     */
    public $autoCreateUserConfig;

    /**
     * @description 自动更新账户规则配置。
     *
     * @var autoUpdateUserConfig
     */
    public $autoUpdateUserConfig;

    /**
     * @description 账户绑定规则配置。
     *
     * @var bindingConfig
     */
    public $bindingConfig;

    /**
     * @description 钉钉配置
     *
     * @var dingtalkAppConfig
     */
    public $dingtalkAppConfig;

    /**
     * @description 身份提供方名称
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $identityProviderName;

    /**
     * @description 身份提供发类型
     *
     * This parameter is required.
     * @example urn:alibaba:idaas:idp:alibaba:dingtalk:push
     *
     * @var string
     */
    public $identityProviderType;

    /**
     * @description IDaaS EIAM实例的ID。
     *
     * This parameter is required.
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
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
     * @description AD/LDAP配置
     *
     * @var ldapConfig
     */
    public $ldapConfig;

    /**
     * @var string
     */
    public $logoUrl;

    /**
     * @description 网络端点ID
     *
     * @example nae_examplexxxx
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
     * @description 同步出配置
     *
     * @var udPushConfig
     */
    public $udPushConfig;

    /**
     * @description WeCom配置
     *
     * @var weComConfig
     */
    public $weComConfig;
    protected $_name = [
        'authnConfig'             => 'AuthnConfig',
        'autoCreateUserConfig'    => 'AutoCreateUserConfig',
        'autoUpdateUserConfig'    => 'AutoUpdateUserConfig',
        'bindingConfig'           => 'BindingConfig',
        'dingtalkAppConfig'       => 'DingtalkAppConfig',
        'identityProviderName'    => 'IdentityProviderName',
        'identityProviderType'    => 'IdentityProviderType',
        'instanceId'              => 'InstanceId',
        'larkConfig'              => 'LarkConfig',
        'ldapConfig'              => 'LdapConfig',
        'logoUrl'                 => 'LogoUrl',
        'networkAccessEndpointId' => 'NetworkAccessEndpointId',
        'oidcConfig'              => 'OidcConfig',
        'udPullConfig'            => 'UdPullConfig',
        'udPushConfig'            => 'UdPushConfig',
        'weComConfig'             => 'WeComConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authnConfig) {
            $res['AuthnConfig'] = null !== $this->authnConfig ? $this->authnConfig->toMap() : null;
        }
        if (null !== $this->autoCreateUserConfig) {
            $res['AutoCreateUserConfig'] = null !== $this->autoCreateUserConfig ? $this->autoCreateUserConfig->toMap() : null;
        }
        if (null !== $this->autoUpdateUserConfig) {
            $res['AutoUpdateUserConfig'] = null !== $this->autoUpdateUserConfig ? $this->autoUpdateUserConfig->toMap() : null;
        }
        if (null !== $this->bindingConfig) {
            $res['BindingConfig'] = null !== $this->bindingConfig ? $this->bindingConfig->toMap() : null;
        }
        if (null !== $this->dingtalkAppConfig) {
            $res['DingtalkAppConfig'] = null !== $this->dingtalkAppConfig ? $this->dingtalkAppConfig->toMap() : null;
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
        if (null !== $this->ldapConfig) {
            $res['LdapConfig'] = null !== $this->ldapConfig ? $this->ldapConfig->toMap() : null;
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
        if (null !== $this->udPushConfig) {
            $res['UdPushConfig'] = null !== $this->udPushConfig ? $this->udPushConfig->toMap() : null;
        }
        if (null !== $this->weComConfig) {
            $res['WeComConfig'] = null !== $this->weComConfig ? $this->weComConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIdentityProviderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthnConfig'])) {
            $model->authnConfig = authnConfig::fromMap($map['AuthnConfig']);
        }
        if (isset($map['AutoCreateUserConfig'])) {
            $model->autoCreateUserConfig = autoCreateUserConfig::fromMap($map['AutoCreateUserConfig']);
        }
        if (isset($map['AutoUpdateUserConfig'])) {
            $model->autoUpdateUserConfig = autoUpdateUserConfig::fromMap($map['AutoUpdateUserConfig']);
        }
        if (isset($map['BindingConfig'])) {
            $model->bindingConfig = bindingConfig::fromMap($map['BindingConfig']);
        }
        if (isset($map['DingtalkAppConfig'])) {
            $model->dingtalkAppConfig = dingtalkAppConfig::fromMap($map['DingtalkAppConfig']);
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
        if (isset($map['LdapConfig'])) {
            $model->ldapConfig = ldapConfig::fromMap($map['LdapConfig']);
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
        if (isset($map['UdPushConfig'])) {
            $model->udPushConfig = udPushConfig::fromMap($map['UdPushConfig']);
        }
        if (isset($map['WeComConfig'])) {
            $model->weComConfig = weComConfig::fromMap($map['WeComConfig']);
        }

        return $model;
    }
}
