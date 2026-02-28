<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchUpdateDeviceNicknameRequest\deviceNicknameInfo;

class BatchUpdateDeviceNicknameRequest extends Model
{
    /**
     * @var deviceNicknameInfo[]
     */
    public $deviceNicknameInfo;

    /**
     * @var string
     */
    public $iotInstanceId;
    protected $_name = [
        'deviceNicknameInfo' => 'DeviceNicknameInfo',
        'iotInstanceId' => 'IotInstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->deviceNicknameInfo)) {
            Model::validateArray($this->deviceNicknameInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceNicknameInfo) {
            if (\is_array($this->deviceNicknameInfo)) {
                $res['DeviceNicknameInfo'] = [];
                $n1 = 0;
                foreach ($this->deviceNicknameInfo as $item1) {
                    $res['DeviceNicknameInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
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
        if (isset($map['DeviceNicknameInfo'])) {
            if (!empty($map['DeviceNicknameInfo'])) {
                $model->deviceNicknameInfo = [];
                $n1 = 0;
                foreach ($map['DeviceNicknameInfo'] as $item1) {
                    $model->deviceNicknameInfo[$n1] = deviceNicknameInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        return $model;
    }
}
