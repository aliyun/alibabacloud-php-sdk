<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeEslDevicesResponseBody;

use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeEslDevicesResponseBody\eslDevices\eslDeviceInfo;
use AlibabaCloud\Tea\Model;

class eslDevices extends Model
{
    /**
     * @var eslDeviceInfo[]
     */
    public $eslDeviceInfo;
    protected $_name = [
        'eslDeviceInfo' => 'EslDeviceInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eslDeviceInfo) {
            $res['EslDeviceInfo'] = [];
            if (null !== $this->eslDeviceInfo && \is_array($this->eslDeviceInfo)) {
                $n = 0;
                foreach ($this->eslDeviceInfo as $item) {
                    $res['EslDeviceInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eslDevices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EslDeviceInfo'])) {
            if (!empty($map['EslDeviceInfo'])) {
                $model->eslDeviceInfo = [];
                $n                    = 0;
                foreach ($map['EslDeviceInfo'] as $item) {
                    $model->eslDeviceInfo[$n++] = null !== $item ? eslDeviceInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
