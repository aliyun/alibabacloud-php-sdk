<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class ProductSaleInfoListResult extends Model
{
    /**
     * @var ProductSaleInfo[]
     */
    public $productSaleInfos;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'productSaleInfos' => 'productSaleInfos',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->productSaleInfos)) {
            Model::validateArray($this->productSaleInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->productSaleInfos) {
            if (\is_array($this->productSaleInfos)) {
                $res['productSaleInfos'] = [];
                $n1 = 0;
                foreach ($this->productSaleInfos as $item1) {
                    $res['productSaleInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['productSaleInfos'])) {
            if (!empty($map['productSaleInfos'])) {
                $model->productSaleInfos = [];
                $n1 = 0;
                foreach ($map['productSaleInfos'] as $item1) {
                    $model->productSaleInfos[$n1++] = ProductSaleInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
