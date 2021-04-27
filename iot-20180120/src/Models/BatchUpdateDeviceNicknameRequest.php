<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\BatchUpdateDeviceNicknameRequest\deviceNicknameInfo;
use AlibabaCloud\Tea\Model;

class BatchUpdateDeviceNicknameRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var deviceNicknameInfo[]
     */
    public $deviceNicknameInfo;
    protected $_name = [
        'iotInstanceId'      => 'IotInstanceId',
        'deviceNicknameInfo' => 'DeviceNicknameInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->deviceNicknameInfo) {
            $res['DeviceNicknameInfo'] = [];
            if (null !== $this->deviceNicknameInfo && \is_array($this->deviceNicknameInfo)) {
                $n = 0;
                foreach ($this->deviceNicknameInfo as $item) {
                    $res['DeviceNicknameInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchUpdateDeviceNicknameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['DeviceNicknameInfo'])) {
            if (!empty($map['DeviceNicknameInfo'])) {
                $model->deviceNicknameInfo = [];
                $n                         = 0;
                foreach ($map['DeviceNicknameInfo'] as $item) {
                    $model->deviceNicknameInfo[$n++] = null !== $item ? deviceNicknameInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
