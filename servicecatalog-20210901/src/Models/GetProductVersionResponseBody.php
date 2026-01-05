<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProductVersionResponseBody\productVersionDetail;

class GetProductVersionResponseBody extends Model
{
    /**
     * @var productVersionDetail
     */
    public $productVersionDetail;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'productVersionDetail' => 'ProductVersionDetail',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->productVersionDetail) {
            $this->productVersionDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->productVersionDetail) {
            $res['ProductVersionDetail'] = null !== $this->productVersionDetail ? $this->productVersionDetail->toArray($noStream) : $this->productVersionDetail;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ProductVersionDetail'])) {
            $model->productVersionDetail = productVersionDetail::fromMap($map['ProductVersionDetail']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
