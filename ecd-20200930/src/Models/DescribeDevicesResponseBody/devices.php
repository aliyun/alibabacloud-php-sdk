<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDevicesResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDevicesResponseBody\devices\endUserList;
use AlibabaCloud\Tea\Model;

class devices extends Model
{
    /**
     * @description The ID of the device. The serial number (SN) of the hardware client or the UUID of the software client.
     *
     * @example 5F52817BE267A43C608D245070D2****
     *
     * @var string
     */
    public $deviceId;

    /**
     * @description The users who are bound to the device.
     *
     * @var endUserList[]
     */
    public $endUserList;
    protected $_name = [
        'deviceId'    => 'DeviceId',
        'endUserList' => 'EndUserList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->endUserList) {
            $res['EndUserList'] = [];
            if (null !== $this->endUserList && \is_array($this->endUserList)) {
                $n = 0;
                foreach ($this->endUserList as $item) {
                    $res['EndUserList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return devices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['EndUserList'])) {
            if (!empty($map['EndUserList'])) {
                $model->endUserList = [];
                $n                  = 0;
                foreach ($map['EndUserList'] as $item) {
                    $model->endUserList[$n++] = null !== $item ? endUserList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
