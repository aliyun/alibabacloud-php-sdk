<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
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

class CreateIdentityProviderRequest extends Model
{
    /**
     * @var authnConfig
     */
    public $authnConfig;

    /**
     * @var autoCreateUserConfig
     */
    public $autoCreateUserConfig;

    /**
     * @var autoUpdateUserConfig
     */
    public $autoUpdateUserConfig;

    /**
     * @var bindingConfig
     */
    public $bindingConfig;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var dingtalkAppConfig
     */
    public $dingtalkAppConfig;

    /**
     * @var string
     */
    public $identityProviderName;

    /**
     * @var string
     */
    public $identityProviderType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var larkConfig
     */
    public $larkConfig;

    /**
     * @var ldapConfig
     */
    public $ldapConfig;

    /**
     * @var string
     */
    public $logoUrl;

    /**
     * @var string
     */
    public $networkAccessEndpointId;

    /**
     * @var oidcConfig
     */
    public $oidcConfig;

    /**
     * @var udPullConfig
     */
    public $udPullConfig;

    /**
     * @var udPushConfig
     */
    public $udPushConfig;

    /**
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

    public function validate()
    {
        if (null !== $this->authnConfig) {
            $this->authnConfig->validate();
        }
        if (null !== $this->autoCreateUserConfig) {
            $this->autoCreateUserConfig->validate();
        }
        if (null !== $this->autoUpdateUserConfig) {
            $this->autoUpdateUserConfig->validate();
        }
        if (null !== $this->bindingConfig) {
            $this->bindingConfig->validate();
        }
        if (null !== $this->dingtalkAppConfig) {
            $this->dingtalkAppConfig->validate();
        }
        if (null !== $this->larkConfig) {
            $this->larkConfig->validate();
        }
        if (null !== $this->ldapConfig) {
            $this->ldapConfig->validate();
        }
        if (null !== $this->oidcConfig) {
            $this->oidcConfig->validate();
        }
        if (null !== $this->udPullConfig) {
            $this->udPullConfig->validate();
        }
        if (null !== $this->udPushConfig) {
            $this->udPushConfig->validate();
        }
        if (null !== $this->weComConfig) {
            $this->weComConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authnConfig) {
            $res['AuthnConfig'] = null !== $this->authnConfig ? $this->authnConfig->toArray($noStream) : $this->authnConfig;
        }

        if (null !== $this->autoCreateUserConfig) {
            $res['AutoCreateUserConfig'] = null !== $this->autoCreateUserConfig ? $this->autoCreateUserConfig->toArray($noStream) : $this->autoCreateUserConfig;
        }

        if (null !== $this->autoUpdateUserConfig) {
            $res['AutoUpdateUserConfig'] = null !== $this->autoUpdateUserConfig ? $this->autoUpdateUserConfig->toArray($noStream) : $this->autoUpdateUserConfig;
        }

        if (null !== $this->bindingConfig) {
            $res['BindingConfig'] = null !== $this->bindingConfig ? $this->bindingConfig->toArray($noStream) : $this->bindingConfig;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dingtalkAppConfig) {
            $res['DingtalkAppConfig'] = null !== $this->dingtalkAppConfig ? $this->dingtalkAppConfig->toArray($noStream) : $this->dingtalkAppConfig;
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
            $res['LarkConfig'] = null !== $this->larkConfig ? $this->larkConfig->toArray($noStream) : $this->larkConfig;
        }

        if (null !== $this->ldapConfig) {
            $res['LdapConfig'] = null !== $this->ldapConfig ? $this->ldapConfig->toArray($noStream) : $this->ldapConfig;
        }

        if (null !== $this->logoUrl) {
            $res['LogoUrl'] = $this->logoUrl;
        }

        if (null !== $this->networkAccessEndpointId) {
            $res['NetworkAccessEndpointId'] = $this->networkAccessEndpointId;
        }

        if (null !== $this->oidcConfig) {
            $res['OidcConfig'] = null !== $this->oidcConfig ? $this->oidcConfig->toArray($noStream) : $this->oidcConfig;
        }

        if (null !== $this->udPullConfig) {
            $res['UdPullConfig'] = null !== $this->udPullConfig ? $this->udPullConfig->toArray($noStream) : $this->udPullConfig;
        }

        if (null !== $this->udPushConfig) {
            $res['UdPushConfig'] = null !== $this->udPushConfig ? $this->udPushConfig->toArray($noStream) : $this->udPushConfig;
        }

        if (null !== $this->weComConfig) {
            $res['WeComConfig'] = null !== $this->weComConfig ? $this->weComConfig->toArray($noStream) : $this->weComConfig;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
