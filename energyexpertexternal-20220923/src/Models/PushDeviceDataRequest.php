<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\PushDeviceDataRequest\devices;
use AlibabaCloud\Tea\Model;

class PushDeviceDataRequest extends Model
{
    /**
     * @description The type of the device. [View device type definitions](https://carbon-doc.oss-cn-hangzhou.aliyuncs.com/Deviceappendixes-en.pdf)
     *
     * This parameter is required.
     * @example 1
     *
     * @var string
     */
    public $deviceType;

    /**
     * @description List of devices to which data is pushed.
     *
     * This parameter is required.
     * @var devices[]
     */
    public $devices;
    protected $_name = [
        'deviceType' => 'deviceType',
        'devices'    => 'devices',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceType) {
            $res['deviceType'] = $this->deviceType;
        }
        if (null !== $this->devices) {
            $res['devices'] = [];
            if (null !== $this->devices && \is_array($this->devices)) {
                $n = 0;
                foreach ($this->devices as $item) {
                    $res['devices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushDeviceDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deviceType'])) {
            $model->deviceType = $map['deviceType'];
        }
        if (isset($map['devices'])) {
            if (!empty($map['devices'])) {
                $model->devices = [];
                $n              = 0;
                foreach ($map['devices'] as $item) {
                    $model->devices[$n++] = null !== $item ? devices::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
