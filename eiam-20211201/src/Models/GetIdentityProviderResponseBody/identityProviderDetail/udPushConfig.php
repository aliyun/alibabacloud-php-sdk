<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail;

use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail\udPushConfig\udSyncScopeConfigs;
use AlibabaCloud\Tea\Model;

class udPushConfig extends Model
{
    /**
     * @description 增量回调状态，是否处理来自IdP的增量回调数据
     *
     * @example disabled
     *
     * @var string
     */
    public $incrementalCallbackStatus;

    /**
     * @description 同步出配置信息
     *
     * @var udSyncScopeConfigs[]
     */
    public $udSyncScopeConfigs;
    protected $_name = [
        'incrementalCallbackStatus' => 'IncrementalCallbackStatus',
        'udSyncScopeConfigs' => 'UdSyncScopeConfigs',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->incrementalCallbackStatus) {
            $res['IncrementalCallbackStatus'] = $this->incrementalCallbackStatus;
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
