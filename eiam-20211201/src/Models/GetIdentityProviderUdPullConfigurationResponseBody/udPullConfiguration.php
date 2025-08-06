<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderUdPullConfigurationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderUdPullConfigurationResponseBody\udPullConfiguration\ldapUdPullConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderUdPullConfigurationResponseBody\udPullConfiguration\periodicSyncConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderUdPullConfigurationResponseBody\udPullConfiguration\pullProtectedRule;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderUdPullConfigurationResponseBody\udPullConfiguration\udSyncScopeConfig;

class udPullConfiguration extends Model
{
    /**
     * @var string
     */
    public $groupSyncStatus;

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
     * @var ldapUdPullConfig
     */
    public $ldapUdPullConfig;

    /**
     * @var periodicSyncConfig
     */
    public $periodicSyncConfig;

    /**
     * @var string
     */
    public $periodicSyncStatus;

    /**
     * @var pullProtectedRule
     */
    public $pullProtectedRule;

    /**
     * @var udSyncScopeConfig
     */
    public $udSyncScopeConfig;
    protected $_name = [
        'groupSyncStatus' => 'GroupSyncStatus',
        'identityProviderId' => 'IdentityProviderId',
        'incrementalCallbackStatus' => 'IncrementalCallbackStatus',
        'instanceId' => 'InstanceId',
        'ldapUdPullConfig' => 'LdapUdPullConfig',
        'periodicSyncConfig' => 'PeriodicSyncConfig',
        'periodicSyncStatus' => 'PeriodicSyncStatus',
        'pullProtectedRule' => 'PullProtectedRule',
        'udSyncScopeConfig' => 'UdSyncScopeConfig',
    ];

    public function validate()
    {
        if (null !== $this->ldapUdPullConfig) {
            $this->ldapUdPullConfig->validate();
        }
        if (null !== $this->periodicSyncConfig) {
            $this->periodicSyncConfig->validate();
        }
        if (null !== $this->pullProtectedRule) {
            $this->pullProtectedRule->validate();
        }
        if (null !== $this->udSyncScopeConfig) {
            $this->udSyncScopeConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupSyncStatus) {
            $res['GroupSyncStatus'] = $this->groupSyncStatus;
        }

        if (null !== $this->identityProviderId) {
            $res['IdentityProviderId'] = $this->identityProviderId;
        }

        if (null !== $this->incrementalCallbackStatus) {
            $res['IncrementalCallbackStatus'] = $this->incrementalCallbackStatus;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->ldapUdPullConfig) {
            $res['LdapUdPullConfig'] = null !== $this->ldapUdPullConfig ? $this->ldapUdPullConfig->toArray($noStream) : $this->ldapUdPullConfig;
        }

        if (null !== $this->periodicSyncConfig) {
            $res['PeriodicSyncConfig'] = null !== $this->periodicSyncConfig ? $this->periodicSyncConfig->toArray($noStream) : $this->periodicSyncConfig;
        }

        if (null !== $this->periodicSyncStatus) {
            $res['PeriodicSyncStatus'] = $this->periodicSyncStatus;
        }

        if (null !== $this->pullProtectedRule) {
            $res['PullProtectedRule'] = null !== $this->pullProtectedRule ? $this->pullProtectedRule->toArray($noStream) : $this->pullProtectedRule;
        }

        if (null !== $this->udSyncScopeConfig) {
            $res['UdSyncScopeConfig'] = null !== $this->udSyncScopeConfig ? $this->udSyncScopeConfig->toArray($noStream) : $this->udSyncScopeConfig;
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
        if (isset($map['GroupSyncStatus'])) {
            $model->groupSyncStatus = $map['GroupSyncStatus'];
        }

        if (isset($map['IdentityProviderId'])) {
            $model->identityProviderId = $map['IdentityProviderId'];
        }

        if (isset($map['IncrementalCallbackStatus'])) {
            $model->incrementalCallbackStatus = $map['IncrementalCallbackStatus'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LdapUdPullConfig'])) {
            $model->ldapUdPullConfig = ldapUdPullConfig::fromMap($map['LdapUdPullConfig']);
        }

        if (isset($map['PeriodicSyncConfig'])) {
            $model->periodicSyncConfig = periodicSyncConfig::fromMap($map['PeriodicSyncConfig']);
        }

        if (isset($map['PeriodicSyncStatus'])) {
            $model->periodicSyncStatus = $map['PeriodicSyncStatus'];
        }

        if (isset($map['PullProtectedRule'])) {
            $model->pullProtectedRule = pullProtectedRule::fromMap($map['PullProtectedRule']);
        }

        if (isset($map['UdSyncScopeConfig'])) {
            $model->udSyncScopeConfig = udSyncScopeConfig::fromMap($map['UdSyncScopeConfig']);
        }

        return $model;
    }
}
