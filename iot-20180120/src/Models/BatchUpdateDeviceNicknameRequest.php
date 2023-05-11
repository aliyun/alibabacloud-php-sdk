<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\BatchUpdateDeviceNicknameRequest\deviceNicknameInfo;
use AlibabaCloud\Tea\Model;

class BatchUpdateDeviceNicknameRequest extends Model
{
    /**
     * @var deviceNicknameInfo[]
     */
    public $deviceNicknameInfo;

    /**
     * @description The ID of the instance. You can view the instance **ID** on the **Overview** page in the IoT Platform console.
     *
     * >*   If your instance has an ID, you must configure this parameter. If you do not set this parameter, the call fails.
     * >*   If your instance has no **Overview** page or ID, you do not need to set this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;
    protected $_name = [
        'deviceNicknameInfo' => 'DeviceNicknameInfo',
        'iotInstanceId'      => 'IotInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceNicknameInfo) {
            $res['DeviceNicknameInfo'] = [];
            if (null !== $this->deviceNicknameInfo && \is_array($this->deviceNicknameInfo)) {
                $n = 0;
                foreach ($this->deviceNicknameInfo as $item) {
                    $res['DeviceNicknameInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
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
        if (isset($map['DeviceNicknameInfo'])) {
            if (!empty($map['DeviceNicknameInfo'])) {
                $model->deviceNicknameInfo = [];
                $n                         = 0;
                foreach ($map['DeviceNicknameInfo'] as $item) {
                    $model->deviceNicknameInfo[$n++] = null !== $item ? deviceNicknameInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        return $model;
    }
}
