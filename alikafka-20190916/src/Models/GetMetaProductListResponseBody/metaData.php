<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetMetaProductListResponseBody;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetMetaProductListResponseBody\metaData\productsNormal;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetMetaProductListResponseBody\metaData\productsProfessional;
use AlibabaCloud\Tea\Model;

class metaData extends Model
{
    /**
     * @var productsNormal
     */
    public $productsNormal;

    /**
     * @var productsProfessional
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
            $res['ProductsNormal'] = null !== $this->productsNormal ? $this->productsNormal->toMap() : null;
        }
        if (null !== $this->productsProfessional) {
            $res['ProductsProfessional'] = null !== $this->productsProfessional ? $this->productsProfessional->toMap() : null;
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
            $model->productsNormal = productsNormal::fromMap($map['ProductsNormal']);
        }
        if (isset($map['ProductsProfessional'])) {
            $model->productsProfessional = productsProfessional::fromMap($map['ProductsProfessional']);
        }
        if (isset($map['Names'])) {
            $model->names = $map['Names'];
        }

        return $model;
    }
}
