<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundDetailResponseBody\data\passengerRefundDetails;

use AlibabaCloud\Tea\Model;

class refundFee extends Model
{
    /**
     * @example 30
     *
     * @var float
     */
    public $alreadyUsedTotalFee;

    /**
     * @example 30
     *
     * @var float
     */
    public $modifyRefundToBuyerMoney;

    /**
     * @example 30
     *
     * @var float
     */
    public $nonRefundableChangeServiceFee;

    /**
     * @example 30
     *
     * @var float
     */
    public $nonRefundableChangeUpgradeFee;

    /**
     * @example 30
     *
     * @var float
     */
    public $nonRefundableTaxFee;

    /**
     * @example 30
     *
     * @var float
     */
    public $nonRefundableTicketFee;

    /**
     * @example 30
     *
     * @var float
     */
    public $refundToBuyerMoney;
    protected $_name = [
        'alreadyUsedTotalFee'           => 'already_used_total_fee',
        'modifyRefundToBuyerMoney'      => 'modify_refund_to_buyer_money',
        'nonRefundableChangeServiceFee' => 'non_refundable_change_service_fee',
        'nonRefundableChangeUpgradeFee' => 'non_refundable_change_upgrade_fee',
        'nonRefundableTaxFee'           => 'non_refundable_tax_fee',
        'nonRefundableTicketFee'        => 'non_refundable_ticket_fee',
        'refundToBuyerMoney'            => 'refund_to_buyer_money',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alreadyUsedTotalFee) {
            $res['already_used_total_fee'] = $this->alreadyUsedTotalFee;
        }
        if (null !== $this->modifyRefundToBuyerMoney) {
            $res['modify_refund_to_buyer_money'] = $this->modifyRefundToBuyerMoney;
        }
        if (null !== $this->nonRefundableChangeServiceFee) {
            $res['non_refundable_change_service_fee'] = $this->nonRefundableChangeServiceFee;
        }
        if (null !== $this->nonRefundableChangeUpgradeFee) {
            $res['non_refundable_change_upgrade_fee'] = $this->nonRefundableChangeUpgradeFee;
        }
        if (null !== $this->nonRefundableTaxFee) {
            $res['non_refundable_tax_fee'] = $this->nonRefundableTaxFee;
        }
        if (null !== $this->nonRefundableTicketFee) {
            $res['non_refundable_ticket_fee'] = $this->nonRefundableTicketFee;
        }
        if (null !== $this->refundToBuyerMoney) {
            $res['refund_to_buyer_money'] = $this->refundToBuyerMoney;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return refundFee
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['already_used_total_fee'])) {
            $model->alreadyUsedTotalFee = $map['already_used_total_fee'];
        }
        if (isset($map['modify_refund_to_buyer_money'])) {
            $model->modifyRefundToBuyerMoney = $map['modify_refund_to_buyer_money'];
        }
        if (isset($map['non_refundable_change_service_fee'])) {
            $model->nonRefundableChangeServiceFee = $map['non_refundable_change_service_fee'];
        }
        if (isset($map['non_refundable_change_upgrade_fee'])) {
            $model->nonRefundableChangeUpgradeFee = $map['non_refundable_change_upgrade_fee'];
        }
        if (isset($map['non_refundable_tax_fee'])) {
            $model->nonRefundableTaxFee = $map['non_refundable_tax_fee'];
        }
        if (isset($map['non_refundable_ticket_fee'])) {
            $model->nonRefundableTicketFee = $map['non_refundable_ticket_fee'];
        }
        if (isset($map['refund_to_buyer_money'])) {
            $model->refundToBuyerMoney = $map['refund_to_buyer_money'];
        }

        return $model;
    }
}
