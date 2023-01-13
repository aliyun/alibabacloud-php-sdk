<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetDeviceStateResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetDeviceStateResponse\deviceStatusList\deviceStatus;
use AlibabaCloud\Tea\Model;

class deviceStatusList extends Model
{
    /**
     * @var deviceStatus[]
     */
    public $deviceStatus;
    protected $_name = [
        'deviceStatus' => 'DeviceStatus',
    ];

    public function validate()
    {
        Model::validateRequired('deviceStatus', $this->deviceStatus, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceStatus) {
            $res['DeviceStatus'] = [];
            if (null !== $this->deviceStatus && \is_array($this->deviceStatus)) {
                $n = 0;
                foreach ($this->deviceStatus as $item) {
                    $res['DeviceStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceStatusList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceStatus'])) {
            if (!empty($map['DeviceStatus'])) {
                $model->deviceStatus = [];
                $n                   = 0;
                foreach ($map['DeviceStatus'] as $item) {
                    $model->deviceStatus[$n++] = null !== $item ? deviceStatus::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
