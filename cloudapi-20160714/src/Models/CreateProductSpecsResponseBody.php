<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateProductSpecsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $productSpecsId;

    /**
     * @var string
     */
    public $productSpecsCode;
    protected $_name = [
        'requestId'        => 'RequestId',
        'productSpecsId'   => 'ProductSpecsId',
        'productSpecsCode' => 'ProductSpecsCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->productSpecsId) {
            $res['ProductSpecsId'] = $this->productSpecsId;
        }
        if (null !== $this->productSpecsCode) {
            $res['ProductSpecsCode'] = $this->productSpecsCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProductSpecsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ProductSpecsId'])) {
            $model->productSpecsId = $map['ProductSpecsId'];
        }
        if (isset($map['ProductSpecsCode'])) {
            $model->productSpecsCode = $map['ProductSpecsCode'];
        }

        return $model;
    }
}
