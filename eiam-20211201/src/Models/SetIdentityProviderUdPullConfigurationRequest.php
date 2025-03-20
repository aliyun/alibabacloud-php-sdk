<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\SetIdentityProviderUdPullConfigurationRequest\ldapUdPullConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetIdentityProviderUdPullConfigurationRequest\periodicSyncConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetIdentityProviderUdPullConfigurationRequest\pullProtectedRule;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetIdentityProviderUdPullConfigurationRequest\udSyncScopeConfig;
use AlibabaCloud\Tea\Model;

class SetIdentityProviderUdPullConfigurationRequest extends Model
{
    /**
     * @description 组同步状态
     *
     * @example disabled
     *
     * @var string
     */
    public $groupSyncStatus;

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
     * @description 增量回调状态，是否处理来自IdP的增量回调数据
     *
     * This parameter is required.
     *
     * @example disabled
     *
     * @var string
     */
    public $incrementalCallbackStatus;

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
     * @description ldap同步侧相关配置信息
     *
     * @var ldapUdPullConfig
     */
    public $ldapUdPullConfig;

    /**
     * @var periodicSyncConfig
     */
    public $periodicSyncConfig;

    /**
     * @example disabled
     *
     * @var string
     */
    public $periodicSyncStatus;

    /**
     * @description 同步入保护规则,根据IdP的type做解析
     *
     * @var pullProtectedRule
     */
    public $pullProtectedRule;

    /**
     * @description 同步入配置信息
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
     * @return SetIdentityProviderUdPullConfigurationRequest
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
