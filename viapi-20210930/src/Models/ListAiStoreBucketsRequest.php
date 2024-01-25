<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapi\V20210930\Models;

use AlibabaCloud\Tea\Model;

class ListAiStoreBucketsRequest extends Model
{
    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $product;
    protected $_name = [
        'apiName' => 'ApiName',
        'product' => 'Product',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAiStoreBucketsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        return $model;
    }
}
