<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryVehicleDeviceResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryVehicleDeviceResponse\data\jtProtocolDeviceData;
use AlibabaCloud\Tea\Model;

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

    /**
     * @var jtProtocolDeviceData
     */
    public $jtProtocolDeviceData;
    protected $_name = [
        'createTime'           => 'CreateTime',
        'deviceName'           => 'DeviceName',
        'iotId'                => 'IotId',
        'modifiedTime'         => 'ModifiedTime',
        'productKey'           => 'ProductKey',
        'protocol'             => 'Protocol',
        'jtProtocolDeviceData' => 'JtProtocolDeviceData',
    ];

    public function validate()
    {
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('deviceName', $this->deviceName, true);
        Model::validateRequired('iotId', $this->iotId, true);
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
        Model::validateRequired('productKey', $this->productKey, true);
        Model::validateRequired('protocol', $this->protocol, true);
        Model::validateRequired('jtProtocolDeviceData', $this->jtProtocolDeviceData, true);
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
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->jtProtocolDeviceData) {
            $res['JtProtocolDeviceData'] = null !== $this->jtProtocolDeviceData ? $this->jtProtocolDeviceData->toMap() : null;
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
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['JtProtocolDeviceData'])) {
            $model->jtProtocolDeviceData = jtProtocolDeviceData::fromMap($map['JtProtocolDeviceData']);
        }

        return $model;
    }
}
