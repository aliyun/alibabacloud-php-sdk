<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetThingTopoResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class deviceInfo extends Model
{
    /**
     * @var string
     */
    public $iotId;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $deviceName;
    protected $_name = [
        'iotId'      => 'IotId',
        'productKey' => 'ProductKey',
        'deviceName' => 'DeviceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }

        return $model;
    }
}
