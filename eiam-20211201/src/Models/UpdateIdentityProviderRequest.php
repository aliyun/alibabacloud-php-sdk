<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateIdentityProviderRequest\dingtalkAppConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateIdentityProviderRequest\larkConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateIdentityProviderRequest\ldapConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateIdentityProviderRequest\oidcConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateIdentityProviderRequest\weComConfig;

class UpdateIdentityProviderRequest extends Model
{
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
    public $identityProviderId;

    /**
     * @var string
     */
    public $identityProviderName;

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
     * @var weComConfig
     */
    public $weComConfig;
    protected $_name = [
        'clientToken' => 'ClientToken',
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

    public function validate()
    {
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
        if (null !== $this->weComConfig) {
            $this->weComConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dingtalkAppConfig) {
            $res['DingtalkAppConfig'] = null !== $this->dingtalkAppConfig ? $this->dingtalkAppConfig->toArray($noStream) : $this->dingtalkAppConfig;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

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
