<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateDeviceTunnelRequest extends Model
{
    /**
     * @var string
     */
    public $iotId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $udi;

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
    public $iotInstanceId;
    protected $_name = [
        'iotId'         => 'IotId',
        'description'   => 'Description',
        'udi'           => 'Udi',
        'productKey'    => 'ProductKey',
        'deviceName'    => 'DeviceName',
        'iotInstanceId' => 'IotInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->udi) {
            $res['Udi'] = $this->udi;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDeviceTunnelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Udi'])) {
            $model->udi = $map['Udi'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        return $model;
    }
}
