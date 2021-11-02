<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityResponseBody\itemList\item\skuList;

use AlibabaCloud\Tea\Model;

class sku extends Model
{
    /**
     * @var int
     */
    public $maxAllowedCount;

    /**
     * @var int
     */
    public $points;

    /**
     * @var int
     */
    public $pointsAmount;

    /**
     * @var string
     */
    public $pointsInfo;

    /**
     * @var string
     */
    public $pointsKey;

    /**
     * @var int
     */
    public $priceCent;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var int
     */
    public $skuId;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'maxAllowedCount' => 'MaxAllowedCount',
        'points'          => 'Points',
        'pointsAmount'    => 'PointsAmount',
        'pointsInfo'      => 'PointsInfo',
        'pointsKey'       => 'PointsKey',
        'priceCent'       => 'PriceCent',
        'quantity'        => 'Quantity',
        'skuId'           => 'SkuId',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxAllowedCount) {
            $res['MaxAllowedCount'] = $this->maxAllowedCount;
        }
        if (null !== $this->points) {
            $res['Points'] = $this->points;
        }
        if (null !== $this->pointsAmount) {
            $res['PointsAmount'] = $this->pointsAmount;
        }
        if (null !== $this->pointsInfo) {
            $res['PointsInfo'] = $this->pointsInfo;
        }
        if (null !== $this->pointsKey) {
            $res['PointsKey'] = $this->pointsKey;
        }
        if (null !== $this->priceCent) {
            $res['PriceCent'] = $this->priceCent;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sku
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxAllowedCount'])) {
            $model->maxAllowedCount = $map['MaxAllowedCount'];
        }
        if (isset($map['Points'])) {
            $model->points = $map['Points'];
        }
        if (isset($map['PointsAmount'])) {
            $model->pointsAmount = $map['PointsAmount'];
        }
        if (isset($map['PointsInfo'])) {
            $model->pointsInfo = $map['PointsInfo'];
        }
        if (isset($map['PointsKey'])) {
            $model->pointsKey = $map['PointsKey'];
        }
        if (isset($map['PriceCent'])) {
            $model->priceCent = $map['PriceCent'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
