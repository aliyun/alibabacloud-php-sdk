<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\ListProductsResponseBody;

use AlibabaCloud\Tea\Model;

class products extends Model
{
    /**
     * @example ECS
     *
     * @var string
     */
    public $productCode;

    /**
     * @example Elastic Compute Service
     *
     * @var string
     */
    public $productName;
    protected $_name = [
        'productCode' => 'productCode',
        'productName' => 'productName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productCode) {
            $res['productCode'] = $this->productCode;
        }
        if (null !== $this->productName) {
            $res['productName'] = $this->productName;
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
        if (isset($map['productCode'])) {
            $model->productCode = $map['productCode'];
        }
        if (isset($map['productName'])) {
            $model->productName = $map['productName'];
        }

        return $model;
    }
}
