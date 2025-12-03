<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yuqing\V20220301\Models;

use AlibabaCloud\Dara\Model;

class OpenProductRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var ProductInstance
     */
    public $productInstance;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'productInstance' => 'productInstance',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->productInstance) {
            $this->productInstance->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->productInstance) {
            $res['productInstance'] = null !== $this->productInstance ? $this->productInstance->toArray($noStream) : $this->productInstance;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['productInstance'])) {
            $model->productInstance = ProductInstance::fromMap($map['productInstance']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
