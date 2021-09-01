<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityResponseBody\itemList\item\activities\activity\activitySessions\activitySession\activitySessionItem;

use AlibabaCloud\Tea\Model;

class activitySessionItemSkuList extends Model
{
    /**
     * @var int
     */
    public $skuId;

    /**
     * @var int
     */
    public $priceCent;

    /**
     * @var int
     */
    public $points;

    /**
     * @var int
     */
    public $pointsAmount;
    protected $_name = [
        'skuId'        => 'SkuId',
        'priceCent'    => 'PriceCent',
        'points'       => 'Points',
        'pointsAmount' => 'PointsAmount',
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
        if (null !== $this->priceCent) {
            $res['PriceCent'] = $this->priceCent;
        }
        if (null !== $this->points) {
            $res['Points'] = $this->points;
        }
        if (null !== $this->pointsAmount) {
            $res['PointsAmount'] = $this->pointsAmount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return activitySessionItemSkuList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['PriceCent'])) {
            $model->priceCent = $map['PriceCent'];
        }
        if (isset($map['Points'])) {
            $model->points = $map['Points'];
        }
        if (isset($map['PointsAmount'])) {
            $model->pointsAmount = $map['PointsAmount'];
        }

        return $model;
    }
}
