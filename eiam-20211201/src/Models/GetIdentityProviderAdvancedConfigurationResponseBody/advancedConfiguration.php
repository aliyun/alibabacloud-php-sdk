<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderAdvancedConfigurationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderAdvancedConfigurationResponseBody\advancedConfiguration\dingtalkAdvancedConfig;

class advancedConfiguration extends Model
{
    /**
     * @var dingtalkAdvancedConfig
     */
    public $dingtalkAdvancedConfig;

    /**
     * @var string
     */
    public $identityProviderId;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'dingtalkAdvancedConfig' => 'DingtalkAdvancedConfig',
        'identityProviderId' => 'IdentityProviderId',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        if (null !== $this->dingtalkAdvancedConfig) {
            $this->dingtalkAdvancedConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dingtalkAdvancedConfig) {
            $res['DingtalkAdvancedConfig'] = null !== $this->dingtalkAdvancedConfig ? $this->dingtalkAdvancedConfig->toArray($noStream) : $this->dingtalkAdvancedConfig;
        }

        if (null !== $this->identityProviderId) {
            $res['IdentityProviderId'] = $this->identityProviderId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['DingtalkAdvancedConfig'])) {
            $model->dingtalkAdvancedConfig = dingtalkAdvancedConfig::fromMap($map['DingtalkAdvancedConfig']);
        }

        if (isset($map['IdentityProviderId'])) {
            $model->identityProviderId = $map['IdentityProviderId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
