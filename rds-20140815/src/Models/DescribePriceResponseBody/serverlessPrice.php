<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribePriceResponseBody;

use AlibabaCloud\Dara\Model;

class serverlessPrice extends Model
{
    /**
     * @var float
     */
    public $RCUDiscountMaxAmount;

    /**
     * @var float
     */
    public $RCUDiscountMinAmount;

    /**
     * @var float
     */
    public $RCUOriginalMaxAmount;

    /**
     * @var float
     */
    public $RCUOriginalMinAmount;

    /**
     * @var float
     */
    public $storageOriginalAmount;

    /**
     * @var float
     */
    public $totalOriginalMaxAmount;

    /**
     * @var float
     */
    public $totalOriginalMinAmount;

    /**
     * @var float
     */
    public $tradeMaxRCUAmount;

    /**
     * @var float
     */
    public $tradeMinRCUAmount;

    /**
     * @var float
     */
    public $storageDiscountAmount;
    protected $_name = [
        'RCUDiscountMaxAmount' => 'RCUDiscountMaxAmount',
        'RCUDiscountMinAmount' => 'RCUDiscountMinAmount',
        'RCUOriginalMaxAmount' => 'RCUOriginalMaxAmount',
        'RCUOriginalMinAmount' => 'RCUOriginalMinAmount',
        'storageOriginalAmount' => 'StorageOriginalAmount',
        'totalOriginalMaxAmount' => 'TotalOriginalMaxAmount',
        'totalOriginalMinAmount' => 'TotalOriginalMinAmount',
        'tradeMaxRCUAmount' => 'TradeMaxRCUAmount',
        'tradeMinRCUAmount' => 'TradeMinRCUAmount',
        'storageDiscountAmount' => 'storageDiscountAmount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
