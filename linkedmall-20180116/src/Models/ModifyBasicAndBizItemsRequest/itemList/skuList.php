<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyBasicAndBizItemsRequest\itemList;

use AlibabaCloud\Tea\Model;

class skuList extends Model
{
    /**
     * @var int
     */
    public $statusAction;

    /**
     * @var int
     */
    public $priceCent;

    /**
     * @var int
     */
    public $supplierPrice;

    /**
     * @var int
     */
    public $skuId;

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
    public $benefitId;

    /**
     * @var int
     */
    public $quantity;
    protected $_name = [
        'statusAction'  => 'StatusAction',
        'priceCent'     => 'PriceCent',
        'supplierPrice' => 'SupplierPrice',
        'skuId'         => 'SkuId',
        'points'        => 'Points',
        'pointsAmount'  => 'PointsAmount',
        'benefitId'     => 'BenefitId',
        'quantity'      => 'Quantity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->statusAction) {
            $res['StatusAction'] = $this->statusAction;
        }
        if (null !== $this->priceCent) {
            $res['PriceCent'] = $this->priceCent;
        }
        if (null !== $this->supplierPrice) {
            $res['SupplierPrice'] = $this->supplierPrice;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->points) {
            $res['Points'] = $this->points;
        }
        if (null !== $this->pointsAmount) {
            $res['PointsAmount'] = $this->pointsAmount;
        }
        if (null !== $this->benefitId) {
            $res['BenefitId'] = $this->benefitId;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
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
        if (isset($map['StatusAction'])) {
            $model->statusAction = $map['StatusAction'];
        }
        if (isset($map['PriceCent'])) {
            $model->priceCent = $map['PriceCent'];
        }
        if (isset($map['SupplierPrice'])) {
            $model->supplierPrice = $map['SupplierPrice'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['Points'])) {
            $model->points = $map['Points'];
        }
        if (isset($map['PointsAmount'])) {
            $model->pointsAmount = $map['PointsAmount'];
        }
        if (isset($map['BenefitId'])) {
            $model->benefitId = $map['BenefitId'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }

        return $model;
    }
}
