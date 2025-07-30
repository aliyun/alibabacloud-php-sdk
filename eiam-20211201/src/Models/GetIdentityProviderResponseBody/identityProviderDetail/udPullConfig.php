<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail;

use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail\udPullConfig\udSyncScopeConfig;
use AlibabaCloud\Tea\Model;

class udPullConfig extends Model
{
    /**
     * @description Whether to enable group synchronization. Possible values:
     *
     * Disabled: disabled
     *
     * Enabled: enabled
     *
     * @example disabled
     *
     * @var string
     */
    public $groupSyncStatus;

    /**
     * @description Incremental callback status: Whether to process incremental callback data from the IdP.
     *
     * @example disabled
     *
     * @var string
     */
    public $incrementalCallbackStatus;

    /**
     * @description Inbound synchronization configuration Information.
     *
     * @var udSyncScopeConfig
     */
    public $udSyncScopeConfig;
    protected $_name = [
        'groupSyncStatus' => 'GroupSyncStatus',
        'incrementalCallbackStatus' => 'IncrementalCallbackStatus',
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
        if (isset($map['UdSyncScopeConfig'])) {
            $model->udSyncScopeConfig = udSyncScopeConfig::fromMap($map['UdSyncScopeConfig']);
        }

        return $model;
    }
}
