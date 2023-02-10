<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class RRpcRequest extends Model
{
    /**
     * @var string
     */
    public $contentType;

    /**
     * @example device1
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example aldfeSe****
     *
     * @var string
     */
    public $productKey;

    /**
     * @example dGhpcyBpcyBhbiBleGFtcGxl
     *
     * @var string
     */
    public $requestBase64Byte;

    /**
     * @example 1000
     *
     * @var int
     */
    public $timeout;

    /**
     * @example /a1uZfYb****\/A_Vol****\/user/update
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'contentType'       => 'ContentType',
        'deviceName'        => 'DeviceName',
        'iotInstanceId'     => 'IotInstanceId',
        'productKey'        => 'ProductKey',
        'requestBase64Byte' => 'RequestBase64Byte',
        'timeout'           => 'Timeout',
        'topic'             => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->requestBase64Byte) {
            $res['RequestBase64Byte'] = $this->requestBase64Byte;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
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
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['RequestBase64Byte'])) {
            $model->requestBase64Byte = $map['RequestBase64Byte'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
