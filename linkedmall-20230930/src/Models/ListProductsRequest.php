<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ListProductsRequest extends Model
{
    /**
     * @example 21000019
     *
     * @var string
     */
    public $distributorShopId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'distributorShopId' => 'distributorShopId',
        'pageNumber'        => 'pageNumber',
        'pageSize'          => 'pageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->distributorShopId) {
            $res['distributorShopId'] = $this->distributorShopId;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProductsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['distributorShopId'])) {
            $model->distributorShopId = $map['distributorShopId'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        return $model;
    }
}
