<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetIdentityProviderAuthnConfigurationRequest\autoCreateUserConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetIdentityProviderAuthnConfigurationRequest\autoUpdateUserConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetIdentityProviderAuthnConfigurationRequest\bindingConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetIdentityProviderAuthnConfigurationRequest\ldapAuthnConfig;

class SetIdentityProviderAuthnConfigurationRequest extends Model
{
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
    public $identityProviderId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var ldapAuthnConfig
     */
    public $ldapAuthnConfig;
    protected $_name = [
        'autoCreateUserConfig' => 'AutoCreateUserConfig',
        'autoUpdateUserConfig' => 'AutoUpdateUserConfig',
        'bindingConfig' => 'BindingConfig',
        'identityProviderId' => 'IdentityProviderId',
        'instanceId' => 'InstanceId',
        'ldapAuthnConfig' => 'LdapAuthnConfig',
    ];

    public function validate()
    {
        if (null !== $this->autoCreateUserConfig) {
            $this->autoCreateUserConfig->validate();
        }
        if (null !== $this->autoUpdateUserConfig) {
            $this->autoUpdateUserConfig->validate();
        }
        if (null !== $this->bindingConfig) {
            $this->bindingConfig->validate();
        }
        if (null !== $this->ldapAuthnConfig) {
            $this->ldapAuthnConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoCreateUserConfig) {
            $res['AutoCreateUserConfig'] = null !== $this->autoCreateUserConfig ? $this->autoCreateUserConfig->toArray($noStream) : $this->autoCreateUserConfig;
        }

        if (null !== $this->autoUpdateUserConfig) {
            $res['AutoUpdateUserConfig'] = null !== $this->autoUpdateUserConfig ? $this->autoUpdateUserConfig->toArray($noStream) : $this->autoUpdateUserConfig;
        }

        if (null !== $this->bindingConfig) {
            $res['BindingConfig'] = null !== $this->bindingConfig ? $this->bindingConfig->toArray($noStream) : $this->bindingConfig;
        }

        if (null !== $this->identityProviderId) {
            $res['IdentityProviderId'] = $this->identityProviderId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->ldapAuthnConfig) {
            $res['LdapAuthnConfig'] = null !== $this->ldapAuthnConfig ? $this->ldapAuthnConfig->toArray($noStream) : $this->ldapAuthnConfig;
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
        if (isset($map['AutoCreateUserConfig'])) {
            $model->autoCreateUserConfig = autoCreateUserConfig::fromMap($map['AutoCreateUserConfig']);
        }

        if (isset($map['AutoUpdateUserConfig'])) {
            $model->autoUpdateUserConfig = autoUpdateUserConfig::fromMap($map['AutoUpdateUserConfig']);
        }

        if (isset($map['BindingConfig'])) {
            $model->bindingConfig = bindingConfig::fromMap($map['BindingConfig']);
        }

        if (isset($map['IdentityProviderId'])) {
            $model->identityProviderId = $map['IdentityProviderId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LdapAuthnConfig'])) {
            $model->ldapAuthnConfig = ldapAuthnConfig::fromMap($map['LdapAuthnConfig']);
        }

        return $model;
    }
}
