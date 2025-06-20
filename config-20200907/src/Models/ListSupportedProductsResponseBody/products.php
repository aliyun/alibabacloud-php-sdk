<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListSupportedProductsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\ListSupportedProductsResponseBody\products\resourceTypeList;

class products extends Model
{
    /**
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
        'productNameEn' => 'ProductNameEn',
        'productNameZh' => 'ProductNameZh',
        'resourceTypeList' => 'ResourceTypeList',
    ];

    public function validate()
    {
        if (\is_array($this->resourceTypeList)) {
            Model::validateArray($this->resourceTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->productNameEn) {
            $res['ProductNameEn'] = $this->productNameEn;
        }

        if (null !== $this->productNameZh) {
            $res['ProductNameZh'] = $this->productNameZh;
        }

        if (null !== $this->resourceTypeList) {
            if (\is_array($this->resourceTypeList)) {
                $res['ResourceTypeList'] = [];
                $n1 = 0;
                foreach ($this->resourceTypeList as $item1) {
                    $res['ResourceTypeList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ProductNameEn'])) {
            $model->productNameEn = $map['ProductNameEn'];
        }

        if (isset($map['ProductNameZh'])) {
            $model->productNameZh = $map['ProductNameZh'];
        }

        if (isset($map['ResourceTypeList'])) {
            if (!empty($map['ResourceTypeList'])) {
                $model->resourceTypeList = [];
                $n1 = 0;
                foreach ($map['ResourceTypeList'] as $item1) {
                    $model->resourceTypeList[$n1] = resourceTypeList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
