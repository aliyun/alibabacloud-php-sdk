<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryVehicleDeviceResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryVehicleDeviceResponseBody\data\jtProtocolDeviceData;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The timestamp when the device was created. Unit: milliseconds.
     *
     * @example 1557062301656
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The DeviceName of the device.
     *
     * @example light
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The ID is a unique identifier that is issued by IoT Platform to the device.
     *
     * @example dm0001
     *
     * @var string
     */
    public $iotId;

    /**
     * @var jtProtocolDeviceData
     */
    public $jtProtocolDeviceData;

    /**
     * @description The timestamp when the device was last updated. Unit: milliseconds.
     *
     * @example 1657062301656
     *
     * @var int
     */
    public $modifiedTime;

    /**
     * @description The **ProductKey** of the gateway product to which the device belongs.
     *
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $protocol;
    protected $_name = [
        'createTime'           => 'CreateTime',
        'deviceName'           => 'DeviceName',
        'iotId'                => 'IotId',
        'jtProtocolDeviceData' => 'JtProtocolDeviceData',
        'modifiedTime'         => 'ModifiedTime',
        'productKey'           => 'ProductKey',
        'protocol'             => 'Protocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->jtProtocolDeviceData) {
            $res['JtProtocolDeviceData'] = null !== $this->jtProtocolDeviceData ? $this->jtProtocolDeviceData->toMap() : null;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['JtProtocolDeviceData'])) {
            $model->jtProtocolDeviceData = jtProtocolDeviceData::fromMap($map['JtProtocolDeviceData']);
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        return $model;
    }
}
