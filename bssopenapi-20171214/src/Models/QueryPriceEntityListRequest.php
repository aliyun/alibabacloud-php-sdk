<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryPriceEntityListRequest extends Model
{
    /**
     * @description The code of the service.
     *
     * @example ecs
     *
     * @var string
     */
    public $commodityCode;
    protected $_name = [
        'commodityCode' => 'CommodityCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryPriceEntityListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        return $model;
    }
}
