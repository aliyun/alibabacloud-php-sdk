<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryProjectShareDeviceListResponse\data\deviceList;

use AlibabaCloud\Tea\Model;

class items extends Model
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
    public $sharable;
    protected $_name = [
        'deviceName' => 'DeviceName',
        'iotId'      => 'IotId',
        'productKey' => 'ProductKey',
        'sharable'   => 'Sharable',
    ];

    public function validate()
    {
        Model::validateRequired('deviceName', $this->deviceName, true);
        Model::validateRequired('iotId', $this->iotId, true);
        Model::validateRequired('productKey', $this->productKey, true);
        Model::validateRequired('sharable', $this->sharable, true);
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
        if (null !== $this->sharable) {
            $res['Sharable'] = $this->sharable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
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
        if (isset($map['Sharable'])) {
            $model->sharable = $map['Sharable'];
        }

        return $model;
    }
}
