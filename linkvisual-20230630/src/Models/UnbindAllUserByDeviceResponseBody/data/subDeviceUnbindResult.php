<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20230630\Models\UnbindAllUserByDeviceResponseBody\data;

use AlibabaCloud\Tea\Model;

class subDeviceUnbindResult extends Model
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
     * @var int
     */
    public $unbindResultCode;

    /**
     * @var string
     */
    public $unbindResultMessage;
    protected $_name = [
        'deviceName'          => 'DeviceName',
        'iotId'               => 'IotId',
        'productKey'          => 'ProductKey',
        'unbindResultCode'    => 'UnbindResultCode',
        'unbindResultMessage' => 'UnbindResultMessage',
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
        if (null !== $this->unbindResultCode) {
            $res['UnbindResultCode'] = $this->unbindResultCode;
        }
        if (null !== $this->unbindResultMessage) {
            $res['UnbindResultMessage'] = $this->unbindResultMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subDeviceUnbindResult
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
        if (isset($map['UnbindResultCode'])) {
            $model->unbindResultCode = $map['UnbindResultCode'];
        }
        if (isset($map['UnbindResultMessage'])) {
            $model->unbindResultMessage = $map['UnbindResultMessage'];
        }

        return $model;
    }
}
