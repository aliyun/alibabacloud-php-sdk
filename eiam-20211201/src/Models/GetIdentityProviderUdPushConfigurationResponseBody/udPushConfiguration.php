<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderUdPushConfigurationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderUdPushConfigurationResponseBody\udPushConfiguration\ldapUdPushConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderUdPushConfigurationResponseBody\udPushConfiguration\periodicSyncConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderUdPushConfigurationResponseBody\udPushConfiguration\udSyncScopeConfigs;

class udPushConfiguration extends Model
{
    /**
     * @var string
     */
    public $identityProviderId;

    /**
     * @var string
     */
    public $incrementalCallbackStatus;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var ldapUdPushConfig
     */
    public $ldapUdPushConfig;

    /**
     * @var periodicSyncConfig
     */
    public $periodicSyncConfig;

    /**
     * @var string
     */
    public $periodicSyncStatus;

    /**
     * @var udSyncScopeConfigs[]
     */
    public $udSyncScopeConfigs;
    protected $_name = [
        'identityProviderId' => 'IdentityProviderId',
        'incrementalCallbackStatus' => 'IncrementalCallbackStatus',
        'instanceId' => 'InstanceId',
        'ldapUdPushConfig' => 'LdapUdPushConfig',
        'periodicSyncConfig' => 'PeriodicSyncConfig',
        'periodicSyncStatus' => 'PeriodicSyncStatus',
        'udSyncScopeConfigs' => 'UdSyncScopeConfigs',
    ];

    public function validate()
    {
        if (null !== $this->ldapUdPushConfig) {
            $this->ldapUdPushConfig->validate();
        }
        if (null !== $this->periodicSyncConfig) {
            $this->periodicSyncConfig->validate();
        }
        if (\is_array($this->udSyncScopeConfigs)) {
            Model::validateArray($this->udSyncScopeConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->identityProviderId) {
            $res['IdentityProviderId'] = $this->identityProviderId;
        }

        if (null !== $this->incrementalCallbackStatus) {
            $res['IncrementalCallbackStatus'] = $this->incrementalCallbackStatus;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->ldapUdPushConfig) {
            $res['LdapUdPushConfig'] = null !== $this->ldapUdPushConfig ? $this->ldapUdPushConfig->toArray($noStream) : $this->ldapUdPushConfig;
        }

        if (null !== $this->periodicSyncConfig) {
            $res['PeriodicSyncConfig'] = null !== $this->periodicSyncConfig ? $this->periodicSyncConfig->toArray($noStream) : $this->periodicSyncConfig;
        }

        if (null !== $this->periodicSyncStatus) {
            $res['PeriodicSyncStatus'] = $this->periodicSyncStatus;
        }

        if (null !== $this->udSyncScopeConfigs) {
            if (\is_array($this->udSyncScopeConfigs)) {
                $res['UdSyncScopeConfigs'] = [];
                $n1 = 0;
                foreach ($this->udSyncScopeConfigs as $item1) {
                    $res['UdSyncScopeConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['IdentityProviderId'])) {
            $model->identityProviderId = $map['IdentityProviderId'];
        }

        if (isset($map['IncrementalCallbackStatus'])) {
            $model->incrementalCallbackStatus = $map['IncrementalCallbackStatus'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LdapUdPushConfig'])) {
            $model->ldapUdPushConfig = ldapUdPushConfig::fromMap($map['LdapUdPushConfig']);
        }

        if (isset($map['PeriodicSyncConfig'])) {
            $model->periodicSyncConfig = periodicSyncConfig::fromMap($map['PeriodicSyncConfig']);
        }

        if (isset($map['PeriodicSyncStatus'])) {
            $model->periodicSyncStatus = $map['PeriodicSyncStatus'];
        }

        if (isset($map['UdSyncScopeConfigs'])) {
            if (!empty($map['UdSyncScopeConfigs'])) {
                $model->udSyncScopeConfigs = [];
                $n1 = 0;
                foreach ($map['UdSyncScopeConfigs'] as $item1) {
                    $model->udSyncScopeConfigs[$n1] = udSyncScopeConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
