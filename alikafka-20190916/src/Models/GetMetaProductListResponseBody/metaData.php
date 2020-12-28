<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetMetaProductListResponseBody;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetMetaProductListResponseBody\metaData\productsNormal;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetMetaProductListResponseBody\metaData\productsProfessional;
use AlibabaCloud\Tea\Model;

class metaData extends Model
{
    /**
     * @var productsNormal[]
     */
    public $productsNormal;

    /**
     * @var productsProfessional[]
     */
    public $productsProfessional;

    /**
     * @var mixed[]
     */
    public $names;
    protected $_name = [
        'productsNormal'       => 'ProductsNormal',
        'productsProfessional' => 'ProductsProfessional',
        'names'                => 'Names',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productsNormal) {
            $res['ProductsNormal'] = [];
            if (null !== $this->productsNormal && \is_array($this->productsNormal)) {
                $n = 0;
                foreach ($this->productsNormal as $item) {
                    $res['ProductsNormal'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->productsProfessional) {
            $res['ProductsProfessional'] = [];
            if (null !== $this->productsProfessional && \is_array($this->productsProfessional)) {
                $n = 0;
                foreach ($this->productsProfessional as $item) {
                    $res['ProductsProfessional'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->names) {
            $res['Names'] = $this->names;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metaData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductsNormal'])) {
            if (!empty($map['ProductsNormal'])) {
                $model->productsNormal = [];
                $n                     = 0;
                foreach ($map['ProductsNormal'] as $item) {
                    $model->productsNormal[$n++] = null !== $item ? productsNormal::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ProductsProfessional'])) {
            if (!empty($map['ProductsProfessional'])) {
                $model->productsProfessional = [];
                $n                           = 0;
                foreach ($map['ProductsProfessional'] as $item) {
                    $model->productsProfessional[$n++] = null !== $item ? productsProfessional::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Names'])) {
            $model->names = $map['Names'];
        }

        return $model;
    }
}
