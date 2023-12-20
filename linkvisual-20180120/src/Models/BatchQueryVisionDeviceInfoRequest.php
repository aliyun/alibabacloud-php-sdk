<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class BatchQueryVisionDeviceInfoRequest extends Model
{
    /**
     * @var string[]
     */
    public $deviceNameList;

    /**
     * @var string[]
     */
    public $iotIdList;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $productKey;
    protected $_name = [
        'deviceNameList' => 'DeviceNameList',
        'iotIdList'      => 'IotIdList',
        'iotInstanceId'  => 'IotInstanceId',
        'productKey'     => 'ProductKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceNameList) {
            $res['DeviceNameList'] = $this->deviceNameList;
        }
        if (null !== $this->iotIdList) {
            $res['IotIdList'] = $this->iotIdList;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchQueryVisionDeviceInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceNameList'])) {
            if (!empty($map['DeviceNameList'])) {
                $model->deviceNameList = $map['DeviceNameList'];
            }
        }
        if (isset($map['IotIdList'])) {
            if (!empty($map['IotIdList'])) {
                $model->iotIdList = $map['IotIdList'];
            }
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        return $model;
    }
}
