<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;

class TicketCreateOrderShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $accountNo;

    /**
     * @var string
     */
    public $contactShrink;

    /**
     * @var string
     */
    public $distributorOrderId;

    /**
     * @var string
     */
    public $orderProductShrink;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var string
     */
    public $totalDistributionPriceShrink;

    /**
     * @var string
     */
    public $travelersShrink;
    protected $_name = [
        'accountNo' => 'AccountNo',
        'contactShrink' => 'Contact',
        'distributorOrderId' => 'DistributorOrderId',
        'orderProductShrink' => 'OrderProduct',
        'quantity' => 'Quantity',
        'totalDistributionPriceShrink' => 'TotalDistributionPrice',
        'travelersShrink' => 'Travelers',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountNo) {
            $res['AccountNo'] = $this->accountNo;
        }

        if (null !== $this->contactShrink) {
            $res['Contact'] = $this->contactShrink;
        }

        if (null !== $this->distributorOrderId) {
            $res['DistributorOrderId'] = $this->distributorOrderId;
        }

        if (null !== $this->orderProductShrink) {
            $res['OrderProduct'] = $this->orderProductShrink;
        }

        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }

        if (null !== $this->totalDistributionPriceShrink) {
            $res['TotalDistributionPrice'] = $this->totalDistributionPriceShrink;
        }

        if (null !== $this->travelersShrink) {
            $res['Travelers'] = $this->travelersShrink;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountNo'])) {
            $model->accountNo = $map['AccountNo'];
        }

        if (isset($map['Contact'])) {
            $model->contactShrink = $map['Contact'];
        }

        if (isset($map['DistributorOrderId'])) {
            $model->distributorOrderId = $map['DistributorOrderId'];
        }

        if (isset($map['OrderProduct'])) {
            $model->orderProductShrink = $map['OrderProduct'];
        }

        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }

        if (isset($map['TotalDistributionPrice'])) {
            $model->totalDistributionPriceShrink = $map['TotalDistributionPrice'];
        }

        if (isset($map['Travelers'])) {
            $model->travelersShrink = $map['Travelers'];
        }

        return $model;
    }
}
