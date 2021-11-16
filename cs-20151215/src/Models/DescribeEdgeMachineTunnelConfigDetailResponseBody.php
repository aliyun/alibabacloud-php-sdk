<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeEdgeMachineTunnelConfigDetailResponseBody extends Model
{
    /**
     * @description device name
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $model;

    /**
     * @description product key
     *
     * @var string
     */
    public $productKey;

    /**
     * @description request id
     *
     * @var string
     */
    public $requestId;

    /**
     * @description sn
     *
     * @var string
     */
    public $sn;

    /**
     * @description token
     *
     * @var string
     */
    public $token;

    /**
     * @description tunnel endpoint
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
