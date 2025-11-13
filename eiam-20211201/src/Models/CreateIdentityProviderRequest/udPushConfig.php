<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest\udPushConfig\periodicSyncConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest\udPushConfig\udSyncScopeConfigs;

class udPushConfig extends Model
{
    /**
     * @var string
     */
    public $incrementalCallbackStatus;

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
        'incrementalCallbackStatus' => 'IncrementalCallbackStatus',
        'periodicSyncConfig' => 'PeriodicSyncConfig',
        'periodicSyncStatus' => 'PeriodicSyncStatus',
        'udSyncScopeConfigs' => 'UdSyncScopeConfigs',
    ];

    public function validate()
    {
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
        if (null !== $this->incrementalCallbackStatus) {
            $res['IncrementalCallbackStatus'] = $this->incrementalCallbackStatus;
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
        if (isset($map['IncrementalCallbackStatus'])) {
            $model->incrementalCallbackStatus = $map['IncrementalCallbackStatus'];
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
