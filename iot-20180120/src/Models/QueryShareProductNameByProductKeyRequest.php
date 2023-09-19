<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryShareProductNameByProductKeyRequest extends Model
{
    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $shareTaskCode;
    protected $_name = [
        'productKey'    => 'ProductKey',
        'shareTaskCode' => 'ShareTaskCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->shareTaskCode) {
            $res['ShareTaskCode'] = $this->shareTaskCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryShareProductNameByProductKeyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['ShareTaskCode'])) {
            $model->shareTaskCode = $map['ShareTaskCode'];
        }

        return $model;
    }
}
