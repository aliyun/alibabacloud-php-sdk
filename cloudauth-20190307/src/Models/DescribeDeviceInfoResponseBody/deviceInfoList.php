<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeDeviceInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeDeviceInfoResponseBody\deviceInfoList\deviceInfo;

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
        if (\is_array($this->deviceInfo)) {
            Model::validateArray($this->deviceInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceInfo) {
            if (\is_array($this->deviceInfo)) {
                $res['DeviceInfo'] = [];
                $n1                = 0;
                foreach ($this->deviceInfo as $item1) {
                    $res['DeviceInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DeviceInfo'])) {
            if (!empty($map['DeviceInfo'])) {
                $model->deviceInfo = [];
                $n1                = 0;
                foreach ($map['DeviceInfo'] as $item1) {
                    $model->deviceInfo[$n1++] = deviceInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
