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
     * @description Authentication configuration information.
     *
     * @var authnConfig
     */
    public $authnConfig;

    /**
     * @description Auto-create account rule configuration.
     *
     * @var autoCreateUserConfig
     */
    public $autoCreateUserConfig;

    /**
     * @description Auto-update account rule configuration.
     *
     * @var autoUpdateUserConfig
     */
    public $autoUpdateUserConfig;

    /**
     * @description OIDC identity provider account binding rule configuration.
     *
     * @var bindingConfig
     */
    public $bindingConfig;

    /**
     * @description Idp client token.
     *
     * @example client-token-example
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description DingTalk configuration information.
     *
     * @var dingtalkAppConfig
     */
    public $dingtalkAppConfig;

    /**
     * @description Identity provider name.
     *
     * This parameter is required.
     *
     * @example test
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
     * This parameter is required.
     *
     * @example urn:alibaba:idaas:idp:alibaba:dingtalk:push
     *
     * @var string
     */
    public $identityProviderType;

    /**
     * @description Instance ID.
     *
     * This parameter is required.
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Lark (Feishu) configuration information.
     *
     * @var larkConfig
     */
    public $larkConfig;

    /**
     * @description AD/LDAP configuration information.
     *
     * @var ldapConfig
     */
    public $ldapConfig;

    /**
     * @description IdP logo url.
     *
     * @example xxxx-image://idaas_23aqr2ye554csg33dqpch5eu3q/tmp/d17d9adc-a943-45e7-ba0c-2838dddexxxxx
     *
     * @var string
     */
    public $logoUrl;

    /**
     * @description The unique identifier of the network access endpoint.
     *
     * @example nae_examplexxxx
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
     * @description Inbound synchronization configuration information.
     *
     * @var udPullConfig
     */
    public $udPullConfig;

    /**
     * @description Outbound synchronization configuration information.
     *
     * @var udPushConfig
     */
    public $udPushConfig;

    /**
     * @description WeCom configuration information.
     *
     * @var weComConfig
     */
    public $weComConfig;
    protected $_name = [
        'authnConfig' => 'AuthnConfig',
        'autoCreateUserConfig' => 'AutoCreateUserConfig',
        'autoUpdateUserConfig' => 'AutoUpdateUserConfig',
        'bindingConfig' => 'BindingConfig',
        'clientToken' => 'ClientToken',
        'dingtalkAppConfig' => 'DingtalkAppConfig',
        'identityProviderName' => 'IdentityProviderName',
        'identityProviderType' => 'IdentityProviderType',
        'instanceId' => 'InstanceId',
        'larkConfig' => 'LarkConfig',
        'ldapConfig' => 'LdapConfig',
        'logoUrl' => 'LogoUrl',
        'networkAccessEndpointId' => 'NetworkAccessEndpointId',
        'oidcConfig' => 'OidcConfig',
        'udPullConfig' => 'UdPullConfig',
        'udPushConfig' => 'UdPushConfig',
        'weComConfig' => 'WeComConfig',
    ];

    public function validate() {}

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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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
