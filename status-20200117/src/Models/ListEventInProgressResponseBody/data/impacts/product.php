<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Status\V20200117\Models\ListEventInProgressResponseBody\data\impacts;

use AlibabaCloud\Tea\Model;

class product extends Model
{
    /**
     * @example ecs
     *
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $productName;
    protected $_name = [
        'productId'   => 'ProductId',
        'productName' => 'ProductName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return product
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        return $model;
    }
}
