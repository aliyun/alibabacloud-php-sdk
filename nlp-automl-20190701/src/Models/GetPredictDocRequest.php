<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlpautoml\V20190701\Models;

use AlibabaCloud\Tea\Model;

class GetPredictDocRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1000
     *
     * @var int
     */
    public $docId;

    /**
     * @var string
     */
    public $product;
    protected $_name = [
        'docId'   => 'DocId',
        'product' => 'Product',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->docId) {
            $res['DocId'] = $this->docId;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPredictDocRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocId'])) {
            $model->docId = $map['DocId'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        return $model;
    }
}
