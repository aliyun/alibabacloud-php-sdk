<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yuqing\V20220301\Models;

use AlibabaCloud\Tea\Model;

class CloseProductRequest extends Model
{
    /**
     * @var ProductInstance
     */
    public $productInstance;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'productInstance' => 'productInstance',
        'requestId'       => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productInstance) {
            $res['productInstance'] = null !== $this->productInstance ? $this->productInstance->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CloseProductRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['productInstance'])) {
            $model->productInstance = ProductInstance::fromMap($map['productInstance']);
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
