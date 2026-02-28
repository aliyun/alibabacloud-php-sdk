<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryVehicleDeviceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryVehicleDeviceResponseBody\data\jtProtocolDeviceData;

class data extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $iotId;

    /**
     * @var jtProtocolDeviceData
     */
    public $jtProtocolDeviceData;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $protocol;
    protected $_name = [
        'createTime' => 'CreateTime',
        'deviceName' => 'DeviceName',
        'iotId' => 'IotId',
        'jtProtocolDeviceData' => 'JtProtocolDeviceData',
        'modifiedTime' => 'ModifiedTime',
        'productKey' => 'ProductKey',
        'protocol' => 'Protocol',
    ];

    public function validate()
    {
        if (null !== $this->jtProtocolDeviceData) {
            $this->jtProtocolDeviceData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['JtProtocolDeviceData'] = null !== $this->jtProtocolDeviceData ? $this->jtProtocolDeviceData->toArray($noStream) : $this->jtProtocolDeviceData;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
