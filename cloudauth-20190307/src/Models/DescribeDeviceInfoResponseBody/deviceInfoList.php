<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeDeviceInfoResponseBody;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeDeviceInfoResponseBody\deviceInfoList\deviceInfo;
use AlibabaCloud\Tea\Model;

class deviceInfoList extends Model
{
    /**
     * @var deviceInfo[]
     */
    public $deviceInfo;
    protected $_name = [
        'deviceInfo' => 'DeviceInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceInfo) {
            $res['DeviceInfo'] = [];
            if (null !== $this->deviceInfo && \is_array($this->deviceInfo)) {
                $n = 0;
                foreach ($this->deviceInfo as $item) {
                    $res['DeviceInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceInfo'])) {
            if (!empty($map['DeviceInfo'])) {
                $model->deviceInfo = [];
                $n                 = 0;
                foreach ($map['DeviceInfo'] as $item) {
                    $model->deviceInfo[$n++] = null !== $item ? deviceInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
