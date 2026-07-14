<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;

class CommercializeFetchRequest extends Model
{
    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $encryptType;

    /**
     * @var string
     */
    public $env;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $secretKey;

    /**
     * @var string
     */
    public $sign;

    /**
     * @var string
     */
    public $signType;
    protected $_name = [
        'channelId' => 'channelId',
        'data' => 'data',
        'encryptType' => 'encryptType',
        'env' => 'env',
        'productId' => 'productId',
        'requestId' => 'requestId',
        'secretKey' => 'secretKey',
        'sign' => 'sign',
        'signType' => 'signType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelId) {
            $res['channelId'] = $this->channelId;
        }

        if (null !== $this->data) {
            $res['data'] = $this->data;
        }

        if (null !== $this->encryptType) {
            $res['encryptType'] = $this->encryptType;
        }

        if (null !== $this->env) {
            $res['env'] = $this->env;
        }

        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->secretKey) {
            $res['secretKey'] = $this->secretKey;
        }

        if (null !== $this->sign) {
            $res['sign'] = $this->sign;
        }

        if (null !== $this->signType) {
            $res['signType'] = $this->signType;
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
        if (isset($map['channelId'])) {
            $model->channelId = $map['channelId'];
        }

        if (isset($map['data'])) {
            $model->data = $map['data'];
        }

        if (isset($map['encryptType'])) {
            $model->encryptType = $map['encryptType'];
        }

        if (isset($map['env'])) {
            $model->env = $map['env'];
        }

        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['secretKey'])) {
            $model->secretKey = $map['secretKey'];
        }

        if (isset($map['sign'])) {
            $model->sign = $map['sign'];
        }

        if (isset($map['signType'])) {
            $model->signType = $map['signType'];
        }

        return $model;
    }
}
