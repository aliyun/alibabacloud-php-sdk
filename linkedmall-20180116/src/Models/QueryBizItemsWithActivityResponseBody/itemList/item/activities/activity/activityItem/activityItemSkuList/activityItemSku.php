<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityResponseBody\itemList\item\activities\activity\activityItem\activityItemSkuList;

use AlibabaCloud\Tea\Model;

class activityItemSku extends Model
{
    /**
     * @var int
     */
    public $skuId;

    /**
     * @var int
     */
    public $activityPrice;
    protected $_name = [
        'skuId'         => 'SkuId',
        'activityPrice' => 'ActivityPrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->activityPrice) {
            $res['ActivityPrice'] = $this->activityPrice;
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
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['ActivityPrice'])) {
            $model->activityPrice = $map['ActivityPrice'];
        }

        return $model;
    }
}
