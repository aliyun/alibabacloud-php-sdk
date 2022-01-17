<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\Tea\Model;

class DescribeCommodityRequest extends Model
{
    /**
     * @var string
     */
    public $commodityId;
    protected $_name = [
        'commodityId' => 'CommodityId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityId) {
            $res['CommodityId'] = $this->commodityId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCommodityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityId'])) {
            $model->commodityId = $map['CommodityId'];
        }

        return $model;
    }
}
