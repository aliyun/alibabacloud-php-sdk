<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest;

use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest\udPushConfig\udSyncScopeConfigs;
use AlibabaCloud\Tea\Model;

class udPushConfig extends Model
{
    /**
     * @description Incremental callback status. This field is reserved and currently not in use; please ignore it.
     *
     * @example disabled
     *
     * @var string
     */
    public $incrementalCallbackStatus;

    /**
     * @description Periodic check status. This field is currently not in use, please ignore it.
     *
     * @example disabled
     *
     * @var string
     */
    public $periodicSyncStatus;

    /**
     * @description Outbound synchronization configuration information.
     *
     * @var udSyncScopeConfigs[]
     */
    public $udSyncScopeConfigs;
    protected $_name = [
        'incrementalCallbackStatus' => 'IncrementalCallbackStatus',
        'periodicSyncStatus' => 'PeriodicSyncStatus',
        'udSyncScopeConfigs' => 'UdSyncScopeConfigs',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->incrementalCallbackStatus) {
            $res['IncrementalCallbackStatus'] = $this->incrementalCallbackStatus;
        }
        if (null !== $this->periodicSyncStatus) {
            $res['PeriodicSyncStatus'] = $this->periodicSyncStatus;
        }
        if (null !== $this->udSyncScopeConfigs) {
            $res['UdSyncScopeConfigs'] = [];
            if (null !== $this->udSyncScopeConfigs && \is_array($this->udSyncScopeConfigs)) {
                $n = 0;
                foreach ($this->udSyncScopeConfigs as $item) {
                    $res['UdSyncScopeConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return udPushConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IncrementalCallbackStatus'])) {
            $model->incrementalCallbackStatus = $map['IncrementalCallbackStatus'];
        }
        if (isset($map['PeriodicSyncStatus'])) {
            $model->periodicSyncStatus = $map['PeriodicSyncStatus'];
        }
        if (isset($map['UdSyncScopeConfigs'])) {
            if (!empty($map['UdSyncScopeConfigs'])) {
                $model->udSyncScopeConfigs = [];
                $n = 0;
                foreach ($map['UdSyncScopeConfigs'] as $item) {
                    $model->udSyncScopeConfigs[$n++] = null !== $item ? udSyncScopeConfigs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
