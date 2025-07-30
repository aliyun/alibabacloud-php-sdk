<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest;

use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest\udPullConfig\periodicSyncConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest\udPullConfig\udSyncScopeConfig;
use AlibabaCloud\Tea\Model;

class udPullConfig extends Model
{
    /**
     * @description Whether group synchronization is supported. The default value is disabled. Possible values:
     *
     * - Disabled: disabled
     *
     * - Enabled: enabled
     *
     * @example disabled
     *
     * @var string
     */
    public $groupSyncStatus;

    /**
     * @description Incremental callback status, indicating whether to process incremental callback data from the IdP. Possible values:
     *
     * - Disabled: disabled
     *
     * - Enabled: enabled
     *
     * @example disabled
     *
     * @var string
     */
    public $incrementalCallbackStatus;

    /**
     * @description Scheduled configuration verification.
     *
     * @var periodicSyncConfig
     */
    public $periodicSyncConfig;

    /**
     * @description Periodic check status, indicating whether to periodically check the data differences between EIAM and the identity provider. Possible values:
     * - Disabled: disabled
     *
     * - Enabled: enabled
     *
     * @example disabled
     *
     * @var string
     */
    public $periodicSyncStatus;

    /**
     * @description Synchronization scope configuration information.
     *
     * @var udSyncScopeConfig
     */
    public $udSyncScopeConfig;
    protected $_name = [
        'groupSyncStatus' => 'GroupSyncStatus',
        'incrementalCallbackStatus' => 'IncrementalCallbackStatus',
        'periodicSyncConfig' => 'PeriodicSyncConfig',
        'periodicSyncStatus' => 'PeriodicSyncStatus',
        'udSyncScopeConfig' => 'UdSyncScopeConfig',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupSyncStatus) {
            $res['GroupSyncStatus'] = $this->groupSyncStatus;
        }
        if (null !== $this->incrementalCallbackStatus) {
            $res['IncrementalCallbackStatus'] = $this->incrementalCallbackStatus;
        }
        if (null !== $this->periodicSyncConfig) {
            $res['PeriodicSyncConfig'] = null !== $this->periodicSyncConfig ? $this->periodicSyncConfig->toMap() : null;
        }
        if (null !== $this->periodicSyncStatus) {
            $res['PeriodicSyncStatus'] = $this->periodicSyncStatus;
        }
        if (null !== $this->udSyncScopeConfig) {
            $res['UdSyncScopeConfig'] = null !== $this->udSyncScopeConfig ? $this->udSyncScopeConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return udPullConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupSyncStatus'])) {
            $model->groupSyncStatus = $map['GroupSyncStatus'];
        }
        if (isset($map['IncrementalCallbackStatus'])) {
            $model->incrementalCallbackStatus = $map['IncrementalCallbackStatus'];
        }
        if (isset($map['PeriodicSyncConfig'])) {
            $model->periodicSyncConfig = periodicSyncConfig::fromMap($map['PeriodicSyncConfig']);
        }
        if (isset($map['PeriodicSyncStatus'])) {
            $model->periodicSyncStatus = $map['PeriodicSyncStatus'];
        }
        if (isset($map['UdSyncScopeConfig'])) {
            $model->udSyncScopeConfig = udSyncScopeConfig::fromMap($map['UdSyncScopeConfig']);
        }

        return $model;
    }
}
