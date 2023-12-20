<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\BatchQueryVisionDeviceInfoResponseBody;

use AlibabaCloud\SDK\Linkvisual\V20180120\Models\BatchQueryVisionDeviceInfoResponseBody\data\deviceInfoList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var deviceInfoList[]
     */
    public $deviceInfoList;
    protected $_name = [
        'deviceInfoList' => 'DeviceInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceInfoList) {
            $res['DeviceInfoList'] = [];
            if (null !== $this->deviceInfoList && \is_array($this->deviceInfoList)) {
                $n = 0;
                foreach ($this->deviceInfoList as $item) {
                    $res['DeviceInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceInfoList'])) {
            if (!empty($map['DeviceInfoList'])) {
                $model->deviceInfoList = [];
                $n                     = 0;
                foreach ($map['DeviceInfoList'] as $item) {
                    $model->deviceInfoList[$n++] = null !== $item ? deviceInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
