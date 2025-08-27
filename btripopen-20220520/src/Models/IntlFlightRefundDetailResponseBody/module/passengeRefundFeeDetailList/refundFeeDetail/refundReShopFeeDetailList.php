<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightRefundDetailResponseBody\module\passengeRefundFeeDetailList\refundFeeDetail;

use AlibabaCloud\Dara\Model;

class refundReShopFeeDetailList extends Model
{
    /**
     * @var int
     */
    public $nonRefundableReShopHandlingFee;

    /**
     * @var int
     */
    public $nonRefundableReShopUpgradeFee;

    /**
     * @var int
     */
    public $nonRefundableTaxDiffFee;

    /**
     * @var string
     */
    public $reShopApplyId;

    /**
     * @var int
     */
    public $reShopRefundAmount;

    /**
     * @var int
     */
    public $reShopServiceRefundAmount;

    /**
     * @var int
     */
    public $reShopUpgradeRefundAmount;

    /**
     * @var int
     */
    public $refundTaxDiffAmount;
    protected $_name = [
        'nonRefundableReShopHandlingFee' => 'non_refundable_re_shop_handling_fee',
        'nonRefundableReShopUpgradeFee' => 'non_refundable_re_shop_upgrade_fee',
        'nonRefundableTaxDiffFee' => 'non_refundable_tax_diff_fee',
        'reShopApplyId' => 're_shop_apply_id',
        'reShopRefundAmount' => 're_shop_refund_amount',
        'reShopServiceRefundAmount' => 're_shop_service_refund_amount',
        'reShopUpgradeRefundAmount' => 're_shop_upgrade_refund_amount',
        'refundTaxDiffAmount' => 'refund_tax_diff_amount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nonRefundableReShopHandlingFee) {
            $res['non_refundable_re_shop_handling_fee'] = $this->nonRefundableReShopHandlingFee;
        }

        if (null !== $this->nonRefundableReShopUpgradeFee) {
            $res['non_refundable_re_shop_upgrade_fee'] = $this->nonRefundableReShopUpgradeFee;
        }

        if (null !== $this->nonRefundableTaxDiffFee) {
            $res['non_refundable_tax_diff_fee'] = $this->nonRefundableTaxDiffFee;
        }

        if (null !== $this->reShopApplyId) {
            $res['re_shop_apply_id'] = $this->reShopApplyId;
        }

        if (null !== $this->reShopRefundAmount) {
            $res['re_shop_refund_amount'] = $this->reShopRefundAmount;
        }

        if (null !== $this->reShopServiceRefundAmount) {
            $res['re_shop_service_refund_amount'] = $this->reShopServiceRefundAmount;
        }

        if (null !== $this->reShopUpgradeRefundAmount) {
            $res['re_shop_upgrade_refund_amount'] = $this->reShopUpgradeRefundAmount;
        }

        if (null !== $this->refundTaxDiffAmount) {
            $res['refund_tax_diff_amount'] = $this->refundTaxDiffAmount;
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
        if (isset($map['non_refundable_re_shop_handling_fee'])) {
            $model->nonRefundableReShopHandlingFee = $map['non_refundable_re_shop_handling_fee'];
        }

        if (isset($map['non_refundable_re_shop_upgrade_fee'])) {
            $model->nonRefundableReShopUpgradeFee = $map['non_refundable_re_shop_upgrade_fee'];
        }

        if (isset($map['non_refundable_tax_diff_fee'])) {
            $model->nonRefundableTaxDiffFee = $map['non_refundable_tax_diff_fee'];
        }

        if (isset($map['re_shop_apply_id'])) {
            $model->reShopApplyId = $map['re_shop_apply_id'];
        }

        if (isset($map['re_shop_refund_amount'])) {
            $model->reShopRefundAmount = $map['re_shop_refund_amount'];
        }

        if (isset($map['re_shop_service_refund_amount'])) {
            $model->reShopServiceRefundAmount = $map['re_shop_service_refund_amount'];
        }

        if (isset($map['re_shop_upgrade_refund_amount'])) {
            $model->reShopUpgradeRefundAmount = $map['re_shop_upgrade_refund_amount'];
        }

        if (isset($map['refund_tax_diff_amount'])) {
            $model->refundTaxDiffAmount = $map['refund_tax_diff_amount'];
        }

        return $model;
    }
}
