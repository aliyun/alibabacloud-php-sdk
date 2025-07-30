<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderUdPullConfigurationResponseBody;

use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderUdPullConfigurationResponseBody\udPullConfiguration\ldapUdPullConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderUdPullConfigurationResponseBody\udPullConfiguration\periodicSyncConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderUdPullConfigurationResponseBody\udPullConfiguration\pullProtectedRule;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderUdPullConfigurationResponseBody\udPullConfiguration\udSyncScopeConfig;
use AlibabaCloud\Tea\Model;

class udPullConfiguration extends Model
{
    /**
     * @description Group Synchronization Status
     * Possible values:
     *
     * Disabled: disabled
     *
     * Enabled: enabled
     *
     * @example enabled
     *
     * @var string
     */
    public $groupSyncStatus;

    /**
     * @description Identity provider ID
     *
     * @example idp_my664lwkhpicbyzirog3xxxxx
     *
     * @var string
     */
    public $identityProviderId;

    /**
     * @description Incremental Callback Status: Whether to process incremental callback data from the IdP
     *
     * @example enabled
     *
     * @var string
     */
    public $incrementalCallbackStatus;

    /**
     * @description The ID of the instance.
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description LDAP Synchronization Side Related Configuration Information
     *
     * @var ldapUdPullConfig
     */
    public $ldapUdPullConfig;

    /**
     * @description Scheduled sync configuration
     *
     * @var periodicSyncConfig
     */
    public $periodicSyncConfig;

    /**
     * @description Scheduled Validation Status: Whether to periodically validate data discrepancies between IDaaS and the Identity Provider. Possible values:
     *
     * Disabled: disabled
     *
     * Enabled: enabled
     *
     * @example enabled
     *
     * @var string
     */
    public $periodicSyncStatus;

    /**
     * @description Inbound Synchronization Protection Rule Configuration
     *
     * @var pullProtectedRule
     */
    public $pullProtectedRule;

    /**
     * @description Synchronization Scope Configuration Information
     *
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

    public function validate() {}

    public function toMap()
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
            $res['LdapUdPullConfig'] = null !== $this->ldapUdPullConfig ? $this->ldapUdPullConfig->toMap() : null;
        }
        if (null !== $this->periodicSyncConfig) {
            $res['PeriodicSyncConfig'] = null !== $this->periodicSyncConfig ? $this->periodicSyncConfig->toMap() : null;
        }
        if (null !== $this->periodicSyncStatus) {
            $res['PeriodicSyncStatus'] = $this->periodicSyncStatus;
        }
        if (null !== $this->pullProtectedRule) {
            $res['PullProtectedRule'] = null !== $this->pullProtectedRule ? $this->pullProtectedRule->toMap() : null;
        }
        if (null !== $this->udSyncScopeConfig) {
            $res['UdSyncScopeConfig'] = null !== $this->udSyncScopeConfig ? $this->udSyncScopeConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return udPullConfiguration
     */
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
