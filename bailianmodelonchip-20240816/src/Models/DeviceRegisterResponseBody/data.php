<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\DeviceRegisterResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $nonce;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $responseTime;

    /**
     * @var string
     */
    public $signature;
    protected $_name = [
        'deviceName' => 'deviceName',
        'nonce' => 'nonce',
        'productKey' => 'productKey',
        'responseTime' => 'responseTime',
        'signature' => 'signature',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['deviceName'] = $this->deviceName;
        }

        if (null !== $this->nonce) {
            $res['nonce'] = $this->nonce;
        }

        if (null !== $this->productKey) {
            $res['productKey'] = $this->productKey;
        }

        if (null !== $this->responseTime) {
            $res['responseTime'] = $this->responseTime;
        }

        if (null !== $this->signature) {
            $res['signature'] = $this->signature;
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
        if (isset($map['deviceName'])) {
            $model->deviceName = $map['deviceName'];
        }

        if (isset($map['nonce'])) {
            $model->nonce = $map['nonce'];
        }

        if (isset($map['productKey'])) {
            $model->productKey = $map['productKey'];
        }

        if (isset($map['responseTime'])) {
            $model->responseTime = $map['responseTime'];
        }

        if (isset($map['signature'])) {
            $model->signature = $map['signature'];
        }

        return $model;
    }
}
