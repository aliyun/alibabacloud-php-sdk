<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightRefundDetailResponseBody\module\passengeRefundFeeDetailList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightRefundDetailResponseBody\module\passengeRefundFeeDetailList\refundFeeDetail\refundReShopFeeDetailList;

class refundFeeDetail extends Model
{
    /**
     * @var int
     */
    public $alreadyUsedTotalAmount;

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
     * @var refundReShopFeeDetailList[]
     */
    public $refundReShopFeeDetailList;

    /**
     * @var int
     */
    public $refundTaxDiffAmount;

    /**
     * @var int
     */
    public $refundTaxFee;

    /**
     * @var int
     */
    public $refundTicketFee;

    /**
     * @var int
     */
    public $taxRefundAmount;

    /**
     * @var int
     */
    public $ticketRefundAmount;

    /**
     * @var int
     */
    public $totalRefundAmount;
    protected $_name = [
        'alreadyUsedTotalAmount' => 'already_used_total_amount',
        'nonRefundableReShopHandlingFee' => 'non_refundable_re_shop_handling_fee',
        'nonRefundableReShopUpgradeFee' => 'non_refundable_re_shop_upgrade_fee',
        'nonRefundableTaxDiffFee' => 'non_refundable_tax_diff_fee',
        'reShopRefundAmount' => 're_shop_refund_amount',
        'reShopServiceRefundAmount' => 're_shop_service_refund_amount',
        'reShopUpgradeRefundAmount' => 're_shop_upgrade_refund_amount',
        'refundReShopFeeDetailList' => 'refund_re_shop_fee_detail_list',
        'refundTaxDiffAmount' => 'refund_tax_diff_amount',
        'refundTaxFee' => 'refund_tax_fee',
        'refundTicketFee' => 'refund_ticket_fee',
        'taxRefundAmount' => 'tax_refund_amount',
        'ticketRefundAmount' => 'ticket_refund_amount',
        'totalRefundAmount' => 'total_refund_amount',
    ];

    public function validate()
    {
        if (\is_array($this->refundReShopFeeDetailList)) {
            Model::validateArray($this->refundReShopFeeDetailList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alreadyUsedTotalAmount) {
            $res['already_used_total_amount'] = $this->alreadyUsedTotalAmount;
        }

        if (null !== $this->nonRefundableReShopHandlingFee) {
            $res['non_refundable_re_shop_handling_fee'] = $this->nonRefundableReShopHandlingFee;
        }

        if (null !== $this->nonRefundableReShopUpgradeFee) {
            $res['non_refundable_re_shop_upgrade_fee'] = $this->nonRefundableReShopUpgradeFee;
        }

        if (null !== $this->nonRefundableTaxDiffFee) {
            $res['non_refundable_tax_diff_fee'] = $this->nonRefundableTaxDiffFee;
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

        if (null !== $this->refundReShopFeeDetailList) {
            if (\is_array($this->refundReShopFeeDetailList)) {
                $res['refund_re_shop_fee_detail_list'] = [];
                $n1 = 0;
                foreach ($this->refundReShopFeeDetailList as $item1) {
                    $res['refund_re_shop_fee_detail_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->refundTaxDiffAmount) {
            $res['refund_tax_diff_amount'] = $this->refundTaxDiffAmount;
        }

        if (null !== $this->refundTaxFee) {
            $res['refund_tax_fee'] = $this->refundTaxFee;
        }

        if (null !== $this->refundTicketFee) {
            $res['refund_ticket_fee'] = $this->refundTicketFee;
        }

        if (null !== $this->taxRefundAmount) {
            $res['tax_refund_amount'] = $this->taxRefundAmount;
        }

        if (null !== $this->ticketRefundAmount) {
            $res['ticket_refund_amount'] = $this->ticketRefundAmount;
        }

        if (null !== $this->totalRefundAmount) {
            $res['total_refund_amount'] = $this->totalRefundAmount;
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
        if (isset($map['already_used_total_amount'])) {
            $model->alreadyUsedTotalAmount = $map['already_used_total_amount'];
        }

        if (isset($map['non_refundable_re_shop_handling_fee'])) {
            $model->nonRefundableReShopHandlingFee = $map['non_refundable_re_shop_handling_fee'];
        }

        if (isset($map['non_refundable_re_shop_upgrade_fee'])) {
            $model->nonRefundableReShopUpgradeFee = $map['non_refundable_re_shop_upgrade_fee'];
        }

        if (isset($map['non_refundable_tax_diff_fee'])) {
            $model->nonRefundableTaxDiffFee = $map['non_refundable_tax_diff_fee'];
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

        if (isset($map['refund_re_shop_fee_detail_list'])) {
            if (!empty($map['refund_re_shop_fee_detail_list'])) {
                $model->refundReShopFeeDetailList = [];
                $n1 = 0;
                foreach ($map['refund_re_shop_fee_detail_list'] as $item1) {
                    $model->refundReShopFeeDetailList[$n1] = refundReShopFeeDetailList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['refund_tax_diff_amount'])) {
            $model->refundTaxDiffAmount = $map['refund_tax_diff_amount'];
        }

        if (isset($map['refund_tax_fee'])) {
            $model->refundTaxFee = $map['refund_tax_fee'];
        }

        if (isset($map['refund_ticket_fee'])) {
            $model->refundTicketFee = $map['refund_ticket_fee'];
        }

        if (isset($map['tax_refund_amount'])) {
            $model->taxRefundAmount = $map['tax_refund_amount'];
        }

        if (isset($map['ticket_refund_amount'])) {
            $model->ticketRefundAmount = $map['ticket_refund_amount'];
        }

        if (isset($map['total_refund_amount'])) {
            $model->totalRefundAmount = $map['total_refund_amount'];
        }

        return $model;
    }
}
