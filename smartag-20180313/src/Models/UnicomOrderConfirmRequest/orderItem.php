<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\UnicomOrderConfirmRequest;

use AlibabaCloud\Tea\Model;

class orderItem extends Model
{
    /**
     * @var string
     */
    public $itemAmount;

    /**
     * @var string
     */
    public $scItemName;

    /**
     * @var string
     */
    public $orderItemId;

    /**
     * @var string
     */
    public $tradeItemId;

    /**
     * @var string[]
     */
    public $snList;

    /**
     * @var string
     */
    public $tradeId;

    /**
     * @var int
     */
    public $itemQuantity;

    /**
     * @var string
     */
    public $scItemCode;
    protected $_name = [
        'itemAmount'   => 'ItemAmount',
        'scItemName'   => 'ScItemName',
        'orderItemId'  => 'OrderItemId',
        'tradeItemId'  => 'TradeItemId',
        'snList'       => 'SnList',
        'tradeId'      => 'TradeId',
        'itemQuantity' => 'ItemQuantity',
        'scItemCode'   => 'ScItemCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemAmount) {
            $res['ItemAmount'] = $this->itemAmount;
        }
        if (null !== $this->scItemName) {
            $res['ScItemName'] = $this->scItemName;
        }
        if (null !== $this->orderItemId) {
            $res['OrderItemId'] = $this->orderItemId;
        }
        if (null !== $this->tradeItemId) {
            $res['TradeItemId'] = $this->tradeItemId;
        }
        if (null !== $this->snList) {
            $res['SnList'] = $this->snList;
        }
        if (null !== $this->tradeId) {
            $res['TradeId'] = $this->tradeId;
        }
        if (null !== $this->itemQuantity) {
            $res['ItemQuantity'] = $this->itemQuantity;
        }
        if (null !== $this->scItemCode) {
            $res['ScItemCode'] = $this->scItemCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orderItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemAmount'])) {
            $model->itemAmount = $map['ItemAmount'];
        }
        if (isset($map['ScItemName'])) {
            $model->scItemName = $map['ScItemName'];
        }
        if (isset($map['OrderItemId'])) {
            $model->orderItemId = $map['OrderItemId'];
        }
        if (isset($map['TradeItemId'])) {
            $model->tradeItemId = $map['TradeItemId'];
        }
        if (isset($map['SnList'])) {
            if (!empty($map['SnList'])) {
                $model->snList = $map['SnList'];
            }
        }
        if (isset($map['TradeId'])) {
            $model->tradeId = $map['TradeId'];
        }
        if (isset($map['ItemQuantity'])) {
            $model->itemQuantity = $map['ItemQuantity'];
        }
        if (isset($map['ScItemCode'])) {
            $model->scItemCode = $map['ScItemCode'];
        }

        return $model;
    }
}
