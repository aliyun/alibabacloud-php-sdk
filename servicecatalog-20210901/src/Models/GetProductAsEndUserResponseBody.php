<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProductAsEndUserResponseBody\productSummary;

class GetProductAsEndUserResponseBody extends Model
{
    /**
     * @var productSummary
     */
    public $productSummary;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'productSummary' => 'ProductSummary',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->productSummary) {
            $this->productSummary->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->productSummary) {
            $res['ProductSummary'] = null !== $this->productSummary ? $this->productSummary->toArray($noStream) : $this->productSummary;
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
        if (isset($map['ProductSummary'])) {
            $model->productSummary = productSummary::fromMap($map['ProductSummary']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
