<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryProjectShareDeviceListResponseBody\data\deviceList;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The DeviceName of the device.
     *
     * @example test
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The ID of the device. The ID is the unique identifier that is issued by IoT Platform to the device.
     *
     * @example Q7uOhVRdZRRlDnTLv****00100
     *
     * @var string
     */
    public $iotId;

    /**
     * @description The **ProductKey** of the product to which the device belongs.
     *
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description Indicates whether the project was shared to the device.
     *
     *   **1**: The project was shared.
     *   **0**: The project failed to be shared.
     *
     * @example 1
     *
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
