<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityResponseBody\itemList\item\activities\activity\activityItem\activityItemSkuList;

use AlibabaCloud\Tea\Model;

class activityItemSku extends Model
{
    /**
     * @example 990
     *
     * @var int
     */
    public $activityPrice;

    /**
     * @description skuId
     *
     * @example 471******57
     *
     * @var int
     */
    public $skuId;
    protected $_name = [
        'activityPrice' => 'ActivityPrice',
        'skuId'         => 'SkuId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityPrice) {
            $res['ActivityPrice'] = $this->activityPrice;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return activityItemSku
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityPrice'])) {
            $model->activityPrice = $map['ActivityPrice'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }

        return $model;
    }
}
