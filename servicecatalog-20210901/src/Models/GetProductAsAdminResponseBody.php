<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProductAsAdminResponseBody\productDetail;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProductAsAdminResponseBody\tagOptions;

class GetProductAsAdminResponseBody extends Model
{
    /**
     * @var productDetail
     */
    public $productDetail;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var tagOptions[]
     */
    public $tagOptions;
    protected $_name = [
        'productDetail' => 'ProductDetail',
        'requestId' => 'RequestId',
        'tagOptions' => 'TagOptions',
    ];

    public function validate()
    {
        if (null !== $this->productDetail) {
            $this->productDetail->validate();
        }
        if (\is_array($this->tagOptions)) {
            Model::validateArray($this->tagOptions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->productDetail) {
            $res['ProductDetail'] = null !== $this->productDetail ? $this->productDetail->toArray($noStream) : $this->productDetail;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tagOptions) {
            if (\is_array($this->tagOptions)) {
                $res['TagOptions'] = [];
                $n1 = 0;
                foreach ($this->tagOptions as $item1) {
                    $res['TagOptions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ProductDetail'])) {
            $model->productDetail = productDetail::fromMap($map['ProductDetail']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TagOptions'])) {
            if (!empty($map['TagOptions'])) {
                $model->tagOptions = [];
                $n1 = 0;
                foreach ($map['TagOptions'] as $item1) {
                    $model->tagOptions[$n1] = tagOptions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
