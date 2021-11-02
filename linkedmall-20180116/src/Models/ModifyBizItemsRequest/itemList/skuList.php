<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyBizItemsRequest\itemList;

use AlibabaCloud\Tea\Model;

class skuList extends Model
{
    /**
     * @var string
     */
    public $benefitId;

    /**
     * @var int
     */
    public $points;

    /**
     * @var int
     */
    public $pointsAmount;

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
    public $statusAction;
    protected $_name = [
        'benefitId'    => 'BenefitId',
        'points'       => 'Points',
        'pointsAmount' => 'PointsAmount',
        'priceCent'    => 'PriceCent',
        'quantity'     => 'Quantity',
        'skuId'        => 'SkuId',
        'statusAction' => 'StatusAction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->benefitId) {
            $res['BenefitId'] = $this->benefitId;
        }
        if (null !== $this->points) {
            $res['Points'] = $this->points;
        }
        if (null !== $this->pointsAmount) {
            $res['PointsAmount'] = $this->pointsAmount;
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
        if (null !== $this->statusAction) {
            $res['StatusAction'] = $this->statusAction;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return skuList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BenefitId'])) {
            $model->benefitId = $map['BenefitId'];
        }
        if (isset($map['Points'])) {
            $model->points = $map['Points'];
        }
        if (isset($map['PointsAmount'])) {
            $model->pointsAmount = $map['PointsAmount'];
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
        if (isset($map['StatusAction'])) {
            $model->statusAction = $map['StatusAction'];
        }

        return $model;
    }
}
