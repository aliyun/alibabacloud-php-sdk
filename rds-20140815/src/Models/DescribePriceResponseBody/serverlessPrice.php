<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribePriceResponseBody;

use AlibabaCloud\Tea\Model;

class serverlessPrice extends Model
{
    /**
     * @description MaxRCU discount amount.
     *
     * @example 1**.*
     *
     * @var float
     */
    public $RCUDiscountMaxAmount;

    /**
     * @description MinRCU discount amount.
     *
     * @example 1*.*
     *
     * @var float
     */
    public $RCUDiscountMinAmount;

    /**
     * @description MaxRCU price.
     *
     * @example 2**.*
     *
     * @var float
     */
    public $RCUOriginalMaxAmount;

    /**
     * @description MinRCU price.
     *
     * @example 3*.*
     *
     * @var float
     */
    public $RCUOriginalMinAmount;

    /**
     * @description Original price of the disk.
     *
     * @example 1*
     *
     * @var float
     */
    public $storageOriginalAmount;

    /**
     * @description Maximum total price before discount.
     *
     * @example 2**.*
     *
     * @var float
     */
    public $totalOriginalMaxAmount;

    /**
     * @description The minimum total price before the discount.
     *
     * @example 2*.*
     *
     * @var float
     */
    public $totalOriginalMinAmount;

    /**
     * @description MaxRCU transaction price.
     *
     * @example 1**.*
     *
     * @var float
     */
    public $tradeMaxRCUAmount;

    /**
     * @description MinRCU transaction price.
     *
     * @example 2*.*
     *
     * @var float
     */
    public $tradeMinRCUAmount;

    /**
     * @description Disk discount price.
     *
     * @example 2.*
     *
     * @var float
     */
    public $storageDiscountAmount;
    protected $_name = [
        'RCUDiscountMaxAmount'   => 'RCUDiscountMaxAmount',
        'RCUDiscountMinAmount'   => 'RCUDiscountMinAmount',
        'RCUOriginalMaxAmount'   => 'RCUOriginalMaxAmount',
        'RCUOriginalMinAmount'   => 'RCUOriginalMinAmount',
        'storageOriginalAmount'  => 'StorageOriginalAmount',
        'totalOriginalMaxAmount' => 'TotalOriginalMaxAmount',
        'totalOriginalMinAmount' => 'TotalOriginalMinAmount',
        'tradeMaxRCUAmount'      => 'TradeMaxRCUAmount',
        'tradeMinRCUAmount'      => 'TradeMinRCUAmount',
        'storageDiscountAmount'  => 'storageDiscountAmount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->RCUDiscountMaxAmount) {
            $res['RCUDiscountMaxAmount'] = $this->RCUDiscountMaxAmount;
        }
        if (null !== $this->RCUDiscountMinAmount) {
            $res['RCUDiscountMinAmount'] = $this->RCUDiscountMinAmount;
        }
        if (null !== $this->RCUOriginalMaxAmount) {
            $res['RCUOriginalMaxAmount'] = $this->RCUOriginalMaxAmount;
        }
        if (null !== $this->RCUOriginalMinAmount) {
            $res['RCUOriginalMinAmount'] = $this->RCUOriginalMinAmount;
        }
        if (null !== $this->storageOriginalAmount) {
            $res['StorageOriginalAmount'] = $this->storageOriginalAmount;
        }
        if (null !== $this->totalOriginalMaxAmount) {
            $res['TotalOriginalMaxAmount'] = $this->totalOriginalMaxAmount;
        }
        if (null !== $this->totalOriginalMinAmount) {
            $res['TotalOriginalMinAmount'] = $this->totalOriginalMinAmount;
        }
        if (null !== $this->tradeMaxRCUAmount) {
            $res['TradeMaxRCUAmount'] = $this->tradeMaxRCUAmount;
        }
        if (null !== $this->tradeMinRCUAmount) {
            $res['TradeMinRCUAmount'] = $this->tradeMinRCUAmount;
        }
        if (null !== $this->storageDiscountAmount) {
            $res['storageDiscountAmount'] = $this->storageDiscountAmount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serverlessPrice
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RCUDiscountMaxAmount'])) {
            $model->RCUDiscountMaxAmount = $map['RCUDiscountMaxAmount'];
        }
        if (isset($map['RCUDiscountMinAmount'])) {
            $model->RCUDiscountMinAmount = $map['RCUDiscountMinAmount'];
        }
        if (isset($map['RCUOriginalMaxAmount'])) {
            $model->RCUOriginalMaxAmount = $map['RCUOriginalMaxAmount'];
        }
        if (isset($map['RCUOriginalMinAmount'])) {
            $model->RCUOriginalMinAmount = $map['RCUOriginalMinAmount'];
        }
        if (isset($map['StorageOriginalAmount'])) {
            $model->storageOriginalAmount = $map['StorageOriginalAmount'];
        }
        if (isset($map['TotalOriginalMaxAmount'])) {
            $model->totalOriginalMaxAmount = $map['TotalOriginalMaxAmount'];
        }
        if (isset($map['TotalOriginalMinAmount'])) {
            $model->totalOriginalMinAmount = $map['TotalOriginalMinAmount'];
        }
        if (isset($map['TradeMaxRCUAmount'])) {
            $model->tradeMaxRCUAmount = $map['TradeMaxRCUAmount'];
        }
        if (isset($map['TradeMinRCUAmount'])) {
            $model->tradeMinRCUAmount = $map['TradeMinRCUAmount'];
        }
        if (isset($map['storageDiscountAmount'])) {
            $model->storageDiscountAmount = $map['storageDiscountAmount'];
        }

        return $model;
    }
}
