<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetDeviceStateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetDeviceStateResponseBody\deviceStatusList\deviceStatus;

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
        if (\is_array($this->deviceStatus)) {
            Model::validateArray($this->deviceStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceStatus) {
            if (\is_array($this->deviceStatus)) {
                $res['DeviceStatus'] = [];
                $n1 = 0;
                foreach ($this->deviceStatus as $item1) {
                    $res['DeviceStatus'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DeviceStatus'])) {
            if (!empty($map['DeviceStatus'])) {
                $model->deviceStatus = [];
                $n1 = 0;
                foreach ($map['DeviceStatus'] as $item1) {
                    $model->deviceStatus[$n1] = deviceStatus::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
