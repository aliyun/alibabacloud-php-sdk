<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class RRpcRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $requestBase64Byte;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'iotInstanceId'     => 'IotInstanceId',
        'productKey'        => 'ProductKey',
        'deviceName'        => 'DeviceName',
        'timeout'           => 'Timeout',
        'requestBase64Byte' => 'RequestBase64Byte',
        'topic'             => 'Topic',
    ];

    public function validate()
    {
        Model::validateRequired('productKey', $this->productKey, true);
        Model::validateRequired('deviceName', $this->deviceName, true);
        Model::validateRequired('timeout', $this->timeout, true);
        Model::validateRequired('requestBase64Byte', $this->requestBase64Byte, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->requestBase64Byte) {
            $res['RequestBase64Byte'] = $this->requestBase64Byte;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RRpcRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['RequestBase64Byte'])) {
            $model->requestBase64Byte = $map['RequestBase64Byte'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
