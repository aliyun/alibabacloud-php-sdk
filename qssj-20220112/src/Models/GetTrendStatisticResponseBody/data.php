<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qssj\V20220112\Models\GetTrendStatisticResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $commodityCount;

    /**
     * @var float
     */
    public $sales;

    /**
     * @var int
     */
    public $shopCount;
    protected $_name = [
        'commodityCount' => 'CommodityCount',
        'sales'          => 'Sales',
        'shopCount'      => 'ShopCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCount) {
            $res['CommodityCount'] = $this->commodityCount;
        }
        if (null !== $this->sales) {
            $res['Sales'] = $this->sales;
        }
        if (null !== $this->shopCount) {
            $res['ShopCount'] = $this->shopCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCount'])) {
            $model->commodityCount = $map['CommodityCount'];
        }
        if (isset($map['Sales'])) {
            $model->sales = $map['Sales'];
        }
        if (isset($map['ShopCount'])) {
            $model->shopCount = $map['ShopCount'];
        }

        return $model;
    }
}
