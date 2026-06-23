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
    protected $_name = [
        'channelId' => 'channelId',
        'data' => 'data',
        'productId' => 'productId',
        'requestId' => 'requestId',
        'secretKey' => 'secretKey',
        'sign' => 'sign',
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

        return $model;
    }
}
