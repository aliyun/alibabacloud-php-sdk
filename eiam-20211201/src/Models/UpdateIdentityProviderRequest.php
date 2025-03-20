<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateIdentityProviderRequest\dingtalkAppConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateIdentityProviderRequest\larkConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateIdentityProviderRequest\ldapConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateIdentityProviderRequest\oidcConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateIdentityProviderRequest\weComConfig;
use AlibabaCloud\Tea\Model;

class UpdateIdentityProviderRequest extends Model
{
    /**
     * @description 钉钉出基本信息
     *
     * @var dingtalkAppConfig
     */
    public $dingtalkAppConfig;

    /**
     * @description IDaaS的身份提供方主键id
     *
     * This parameter is required.
     *
     * @example idp_my664lwkhpicbyzirog3xxxxx
     *
     * @var string
     */
    public $identityProviderId;

    /**
     * @description 身份提供方名称
     *
     * @example test
     *
     * @var string
     */
    public $identityProviderName;

    /**
     * @description IDaaS EIAM实例的ID。
     *
     * This parameter is required.
     *
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
     * @description AD/LDAP基本信息
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
     * @description 企业微信基本信息
     *
     * @var weComConfig
     */
    public $weComConfig;
    protected $_name = [
        'dingtalkAppConfig' => 'DingtalkAppConfig',
        'identityProviderId' => 'IdentityProviderId',
        'identityProviderName' => 'IdentityProviderName',
        'instanceId' => 'InstanceId',
        'larkConfig' => 'LarkConfig',
        'ldapConfig' => 'LdapConfig',
        'logoUrl' => 'LogoUrl',
        'networkAccessEndpointId' => 'NetworkAccessEndpointId',
        'oidcConfig' => 'OidcConfig',
        'weComConfig' => 'WeComConfig',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dingtalkAppConfig) {
            $res['DingtalkAppConfig'] = null !== $this->dingtalkAppConfig ? $this->dingtalkAppConfig->toMap() : null;
        }
        if (null !== $this->identityProviderId) {
            $res['IdentityProviderId'] = $this->identityProviderId;
        }
        if (null !== $this->identityProviderName) {
            $res['IdentityProviderName'] = $this->identityProviderName;
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
        if (null !== $this->weComConfig) {
            $res['WeComConfig'] = null !== $this->weComConfig ? $this->weComConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateIdentityProviderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DingtalkAppConfig'])) {
            $model->dingtalkAppConfig = dingtalkAppConfig::fromMap($map['DingtalkAppConfig']);
        }
        if (isset($map['IdentityProviderId'])) {
            $model->identityProviderId = $map['IdentityProviderId'];
        }
        if (isset($map['IdentityProviderName'])) {
            $model->identityProviderName = $map['IdentityProviderName'];
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
        if (isset($map['WeComConfig'])) {
            $model->weComConfig = weComConfig::fromMap($map['WeComConfig']);
        }

        return $model;
    }
}
