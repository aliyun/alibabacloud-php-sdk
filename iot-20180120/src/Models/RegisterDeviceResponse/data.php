<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\RegisterDeviceResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
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

    /**
     * @var string
     */
    public $deviceSecret;

    /**
     * @var string
     */
    public $devEui;

    /**
     * @var string
     */
    public $joinEui;

    /**
     * @var string
     */
    public $nickname;
    protected $_name = [
        'iotId'        => 'IotId',
        'productKey'   => 'ProductKey',
        'deviceName'   => 'DeviceName',
        'deviceSecret' => 'DeviceSecret',
        'devEui'       => 'DevEui',
        'joinEui'      => 'JoinEui',
        'nickname'     => 'Nickname',
    ];

    public function validate()
    {
        Model::validateRequired('iotId', $this->iotId, true);
        Model::validateRequired('productKey', $this->productKey, true);
        Model::validateRequired('deviceName', $this->deviceName, true);
        Model::validateRequired('deviceSecret', $this->deviceSecret, true);
        Model::validateRequired('devEui', $this->devEui, true);
        Model::validateRequired('joinEui', $this->joinEui, true);
        Model::validateRequired('nickname', $this->nickname, true);
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
        if (null !== $this->deviceSecret) {
            $res['DeviceSecret'] = $this->deviceSecret;
        }
        if (null !== $this->devEui) {
            $res['DevEui'] = $this->devEui;
        }
        if (null !== $this->joinEui) {
            $res['JoinEui'] = $this->joinEui;
        }
        if (null !== $this->nickname) {
            $res['Nickname'] = $this->nickname;
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
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['DeviceSecret'])) {
            $model->deviceSecret = $map['DeviceSecret'];
        }
        if (isset($map['DevEui'])) {
            $model->devEui = $map['DevEui'];
        }
        if (isset($map['JoinEui'])) {
            $model->joinEui = $map['JoinEui'];
        }
        if (isset($map['Nickname'])) {
            $model->nickname = $map['Nickname'];
        }

        return $model;
    }
}
