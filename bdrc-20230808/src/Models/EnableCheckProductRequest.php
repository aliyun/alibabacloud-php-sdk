<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models;

use AlibabaCloud\Tea\Model;

class EnableCheckProductRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ecs
     *
     * @var string
     */
    public $productType;
    protected $_name = [
        'productType' => 'ProductType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableCheckProductRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        return $model;
    }
}
