<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchAddDeviceGroupRelationsRequest;

use AlibabaCloud\Tea\Model;

class device extends Model
{
    /**
     * @description The error message returned if the call fails.
     *
     * @example ZHuPo6sZzv7pOzYh****
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The names of the devices to be added. You can specify a maximum of 200 devices.
     *
     * @example a1kORrK****
     *
     * @var string
     */
    public $productKey;
    protected $_name = [
        'deviceName' => 'DeviceName',
        'productKey' => 'ProductKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return device
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        return $model;
    }
}
