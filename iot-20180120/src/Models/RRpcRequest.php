<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class RRpcRequest extends Model
{
    /**
     * @example 240
     *
     * @var string
     */
    public $contentType;

    /**
     * @description The name of the device that receives the request.
     *
     * @example device1
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The ID of the instance. You can view the instance **ID** on the **Overview** page in the IoT Platform console.
     *
     * >*   If your instance has an ID, you must configure this parameter. If you do not set this parameter, the call fails.
     * >*   If your instance has no **Overview** page or ID, you do not need to set this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The ProductKey of the product to which the device belongs.
     *
     * @example aldfeSe****
     *
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $requestBase64Byte;

    /**
     * @description The timeout period of a response. Unit: milliseconds. Valid values: 1000 to 8000.
     *
     * @example 1000
     *
     * @var int
     */
    public $timeout;

    /**
     * @description The custom revert-RPC (RRPC) topic. Before you can use a custom RRPC topic, you must configure the device. For more information, see [Use custom topics](~~90570~~).
     *
     * If you do not configure this parameter, the default RRPC topic is used.
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
