<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryGbSubDeviceListResponseBody\data;

use AlibabaCloud\Tea\Model;

class gbSubDeviceList extends Model
{
    /**
     * @var int
     */
    public $deviceEnable;

    /**
     * @var string
     */
    public $deviceId;

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
    protected $_name = [
        'deviceEnable' => 'DeviceEnable',
        'deviceId'     => 'DeviceId',
        'deviceName'   => 'DeviceName',
        'iotId'        => 'IotId',
        'productKey'   => 'ProductKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceEnable) {
            $res['DeviceEnable'] = $this->deviceEnable;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gbSubDeviceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceEnable'])) {
            $model->deviceEnable = $map['DeviceEnable'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        return $model;
    }
}
