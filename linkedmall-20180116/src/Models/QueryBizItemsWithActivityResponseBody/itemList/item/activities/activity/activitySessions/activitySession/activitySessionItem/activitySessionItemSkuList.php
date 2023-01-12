<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityResponseBody\itemList\item\activities\activity\activitySessions\activitySession\activitySessionItem;

use AlibabaCloud\Tea\Model;

class activitySessionItemSkuList extends Model
{
    /**
     * @example 159
     *
     * @var int
     */
    public $points;

    /**
     * @example 0
     *
     * @var int
     */
    public $pointsAmount;

    /**
     * @example 2990
     *
     * @var int
     */
    public $priceCent;

    /**
     * @description skuId
     *
     * @example 471******57
     *
     * @var int
     */
    public $skuId;
    protected $_name = [
        'points'       => 'Points',
        'pointsAmount' => 'PointsAmount',
        'priceCent'    => 'PriceCent',
        'skuId'        => 'SkuId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->points) {
            $res['Points'] = $this->points;
        }
        if (null !== $this->pointsAmount) {
            $res['PointsAmount'] = $this->pointsAmount;
        }
        if (null !== $this->priceCent) {
            $res['PriceCent'] = $this->priceCent;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
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
        if (isset($map['Points'])) {
            $model->points = $map['Points'];
        }
        if (isset($map['PointsAmount'])) {
            $model->pointsAmount = $map['PointsAmount'];
        }
        if (isset($map['PriceCent'])) {
            $model->priceCent = $map['PriceCent'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }

        return $model;
    }
}
