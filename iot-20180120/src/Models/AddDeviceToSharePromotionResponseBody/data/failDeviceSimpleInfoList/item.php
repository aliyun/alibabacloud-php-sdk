<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\AddDeviceToSharePromotionResponseBody\data\failDeviceSimpleInfoList;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var int
     */
    public $failCode;

    /**
     * @var string
     */
    public $failReason;

    /**
     * @var string
     */
    public $productKey;
    protected $_name = [
        'deviceName' => 'DeviceName',
        'failCode'   => 'FailCode',
        'failReason' => 'FailReason',
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
        if (null !== $this->failCode) {
            $res['FailCode'] = $this->failCode;
        }
        if (null !== $this->failReason) {
            $res['FailReason'] = $this->failReason;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['FailCode'])) {
            $model->failCode = $map['FailCode'];
        }
        if (isset($map['FailReason'])) {
            $model->failReason = $map['FailReason'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        return $model;
    }
}
