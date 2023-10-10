<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeEdgeMachineTunnelConfigDetailResponseBody extends Model
{
    /**
     * @description The device name.
     *
     * @example TEST0621N0FF****
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The model of the cloud-native box.
     *
     * @example ACK-A-S001
     *
     * @var string
     */
    public $model;

    /**
     * @description Product Key
     *
     * @example a11rXul****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description Request ID
     *
     * @example bfd12953-31cb-42f1-8a36-7b80ec345094
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The serial number of the cloud-native box.
     *
     * @example Q2CB5XZAFBFG****
     *
     * @var string
     */
    public $sn;

    /**
     * @description Token
     *
     * @example abcd****
     *
     * @var string
     */
    public $token;

    /**
     * @description The tunnel endpoint.
     *
     * @example wss://frontend-iotx-r-debug.aliyun-inc.test
     *
     * @var string
     */
    public $tunnelEndpoint;
    protected $_name = [
        'deviceName'     => 'device_name',
        'model'          => 'model',
        'productKey'     => 'product_key',
        'requestId'      => 'request_id',
        'sn'             => 'sn',
        'token'          => 'token',
        'tunnelEndpoint' => 'tunnel_endpoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['device_name'] = $this->deviceName;
        }
        if (null !== $this->model) {
            $res['model'] = $this->model;
        }
        if (null !== $this->productKey) {
            $res['product_key'] = $this->productKey;
        }
        if (null !== $this->requestId) {
            $res['request_id'] = $this->requestId;
        }
        if (null !== $this->sn) {
            $res['sn'] = $this->sn;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }
        if (null !== $this->tunnelEndpoint) {
            $res['tunnel_endpoint'] = $this->tunnelEndpoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEdgeMachineTunnelConfigDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['device_name'])) {
            $model->deviceName = $map['device_name'];
        }
        if (isset($map['model'])) {
            $model->model = $map['model'];
        }
        if (isset($map['product_key'])) {
            $model->productKey = $map['product_key'];
        }
        if (isset($map['request_id'])) {
            $model->requestId = $map['request_id'];
        }
        if (isset($map['sn'])) {
            $model->sn = $map['sn'];
        }
        if (isset($map['token'])) {
            $model->token = $map['token'];
        }
        if (isset($map['tunnel_endpoint'])) {
            $model->tunnelEndpoint = $map['tunnel_endpoint'];
        }

        return $model;
    }
}
