<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class DescribeEdgeMachineTunnelConfigDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sn;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $tunnelEndpoint;
    protected $_name = [
        'deviceName' => 'device_name',
        'model' => 'model',
        'productKey' => 'product_key',
        'requestId' => 'request_id',
        'sn' => 'sn',
        'token' => 'token',
        'tunnelEndpoint' => 'tunnel_endpoint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
