<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\CheckDevicesResponseBody;

use AlibabaCloud\SDK\Push\V20160801\Models\CheckDevicesResponseBody\deviceCheckInfos\deviceCheckInfo;
use AlibabaCloud\Tea\Model;

class deviceCheckInfos extends Model
{
    /**
     * @var deviceCheckInfo[]
     */
    public $deviceCheckInfo;
    protected $_name = [
        'deviceCheckInfo' => 'DeviceCheckInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceCheckInfo) {
            $res['DeviceCheckInfo'] = [];
            if (null !== $this->deviceCheckInfo && \is_array($this->deviceCheckInfo)) {
                $n = 0;
                foreach ($this->deviceCheckInfo as $item) {
                    $res['DeviceCheckInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceCheckInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceCheckInfo'])) {
            if (!empty($map['DeviceCheckInfo'])) {
                $model->deviceCheckInfo = [];
                $n                      = 0;
                foreach ($map['DeviceCheckInfo'] as $item) {
                    $model->deviceCheckInfo[$n++] = null !== $item ? deviceCheckInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
