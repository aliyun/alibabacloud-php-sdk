<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListSupportedProductsResponseBody;

use AlibabaCloud\SDK\Config\V20200907\Models\ListSupportedProductsResponseBody\products\resourceTypeList;
use AlibabaCloud\Tea\Model;

class products extends Model
{
    /**
     * @example Elastic Compute Service
     *
     * @var string
     */
    public $productNameEn;

    /**
     * @var string
     */
    public $productNameZh;

    /**
     * @var resourceTypeList[]
     */
    public $resourceTypeList;
    protected $_name = [
        'productNameEn'    => 'ProductNameEn',
        'productNameZh'    => 'ProductNameZh',
        'resourceTypeList' => 'ResourceTypeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productNameEn) {
            $res['ProductNameEn'] = $this->productNameEn;
        }
        if (null !== $this->productNameZh) {
            $res['ProductNameZh'] = $this->productNameZh;
        }
        if (null !== $this->resourceTypeList) {
            $res['ResourceTypeList'] = [];
            if (null !== $this->resourceTypeList && \is_array($this->resourceTypeList)) {
                $n = 0;
                foreach ($this->resourceTypeList as $item) {
                    $res['ResourceTypeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return products
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductNameEn'])) {
            $model->productNameEn = $map['ProductNameEn'];
        }
        if (isset($map['ProductNameZh'])) {
            $model->productNameZh = $map['ProductNameZh'];
        }
        if (isset($map['ResourceTypeList'])) {
            if (!empty($map['ResourceTypeList'])) {
                $model->resourceTypeList = [];
                $n                       = 0;
                foreach ($map['ResourceTypeList'] as $item) {
                    $model->resourceTypeList[$n++] = null !== $item ? resourceTypeList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
