<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyBizItemsRequest\itemList;

use AlibabaCloud\Tea\Model;

class skuList extends Model
{
    /**
     * @example 202108181714875327
     *
     * @var string
     */
    public $benefitId;

    /**
     * @example 1999
     *
     * @var int
     */
    public $points;

    /**
     * @example 1290
     *
     * @var int
     */
    public $pointsAmount;

    /**
     * @example 2790
     *
     * @var int
     */
    public $priceCent;

    /**
     * @example 20000
     *
     * @var int
     */
    public $quantity;

    /**
     * @example 472266643****
     *
     * @var int
     */
    public $skuId;

    /**
     * @example 1
     *
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
