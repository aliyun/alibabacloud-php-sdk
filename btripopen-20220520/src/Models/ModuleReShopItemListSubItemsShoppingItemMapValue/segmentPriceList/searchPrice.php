<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleReShopItemListSubItemsShoppingItemMapValue\segmentPriceList;

use AlibabaCloud\Dara\Model;

class searchPrice extends Model
{
    /**
     * @var int
     */
    public $totalAmount;

    /**
     * @var int
     */
    public $handlingAmount;

    /**
     * @var int
     */
    public $upgradeAmount;

    /**
     * @var int
     */
    public $taxDiffAmount;

    /**
     * @var bool
     */
    public $hasPrice;

    /**
     * @var string
     */
    public $nonPriceText;
    protected $_name = [
        'totalAmount' => 'total_amount',
        'handlingAmount' => 'handling_amount',
        'upgradeAmount' => 'upgrade_amount',
        'taxDiffAmount' => 'tax_diff_amount',
        'hasPrice' => 'has_price',
        'nonPriceText' => 'non_price_text',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->totalAmount) {
            $res['total_amount'] = $this->totalAmount;
        }

        if (null !== $this->handlingAmount) {
            $res['handling_amount'] = $this->handlingAmount;
        }

        if (null !== $this->upgradeAmount) {
            $res['upgrade_amount'] = $this->upgradeAmount;
        }

        if (null !== $this->taxDiffAmount) {
            $res['tax_diff_amount'] = $this->taxDiffAmount;
        }

        if (null !== $this->hasPrice) {
            $res['has_price'] = $this->hasPrice;
        }

        if (null !== $this->nonPriceText) {
            $res['non_price_text'] = $this->nonPriceText;
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
        if (isset($map['total_amount'])) {
            $model->totalAmount = $map['total_amount'];
        }

        if (isset($map['handling_amount'])) {
            $model->handlingAmount = $map['handling_amount'];
        }

        if (isset($map['upgrade_amount'])) {
            $model->upgradeAmount = $map['upgrade_amount'];
        }

        if (isset($map['tax_diff_amount'])) {
            $model->taxDiffAmount = $map['tax_diff_amount'];
        }

        if (isset($map['has_price'])) {
            $model->hasPrice = $map['has_price'];
        }

        if (isset($map['non_price_text'])) {
            $model->nonPriceText = $map['non_price_text'];
        }

        return $model;
    }
}
