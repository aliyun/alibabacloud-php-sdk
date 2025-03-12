<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ProductSaleInfoListResult extends Model
{
    /**
     * @var ProductSaleInfo[]
     */
    public $productSaleInfos;

    /**
     * @example 3239281273464326823
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'productSaleInfos' => 'productSaleInfos',
        'requestId'        => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productSaleInfos) {
            $res['productSaleInfos'] = [];
            if (null !== $this->productSaleInfos && \is_array($this->productSaleInfos)) {
                $n = 0;
                foreach ($this->productSaleInfos as $item) {
                    $res['productSaleInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ProductSaleInfoListResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['productSaleInfos'])) {
            if (!empty($map['productSaleInfos'])) {
                $model->productSaleInfos = [];
                $n                       = 0;
                foreach ($map['productSaleInfos'] as $item) {
                    $model->productSaleInfos[$n++] = null !== $item ? ProductSaleInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
