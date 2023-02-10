<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class AddShareTaskDeviceRequest extends Model
{
    /**
     * @example y4u2weAIrpp****WHMle1234
     *
     * @var string[]
     */
    public $iotIdList;

    /**
     * @example iot-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example a2YwD23***
     *
     * @var string
     */
    public $productKey;

    /**
     * @example Md3ZiTL888K9llXDy7890***********
     *
     * @var string
     */
    public $shareTaskId;
    protected $_name = [
        'iotIdList'     => 'IotIdList',
        'iotInstanceId' => 'IotInstanceId',
        'productKey'    => 'ProductKey',
        'shareTaskId'   => 'ShareTaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotIdList) {
            $res['IotIdList'] = $this->iotIdList;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->shareTaskId) {
            $res['ShareTaskId'] = $this->shareTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddShareTaskDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['ShareTaskId'])) {
            $model->shareTaskId = $map['ShareTaskId'];
        }

        return $model;
    }
}
