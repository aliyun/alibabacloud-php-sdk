<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20230630\Models;

use AlibabaCloud\Tea\Model;

class UnbindAllUserByDeviceRequest extends Model
{
    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $iotId;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var bool
     */
    public $unbindSubDevice;
    protected $_name = [
        'deviceName'      => 'DeviceName',
        'iotId'           => 'IotId',
        'productKey'      => 'ProductKey',
        'unbindSubDevice' => 'UnbindSubDevice',
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
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->unbindSubDevice) {
            $res['UnbindSubDevice'] = $this->unbindSubDevice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnbindAllUserByDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['UnbindSubDevice'])) {
            $model->unbindSubDevice = $map['UnbindSubDevice'];
        }

        return $model;
    }
}
