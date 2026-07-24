<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundDetailResponseBody\data\passengerRefundDetails;

use AlibabaCloud\Dara\Model;

class refundFee extends Model
{
    /**
     * @var float
     */
    public $alreadyUsedTotalFee;

    /**
     * @var float
     */
    public $ancillaryRefundToBuyerMoney;

    /**
     * @var float
     */
    public $modifyRefundToBuyerMoney;

    /**
     * @var float
     */
    public $nonRefundableChangeServiceFee;

    /**
     * @var float
     */
    public $nonRefundableChangeUpgradeFee;

    /**
     * @var float
     */
    public $nonRefundableTaxFee;

    /**
     * @var float
     */
    public $nonRefundableTicketFee;

    /**
     * @var float
     */
    public $refundToBuyerMoney;

    /**
     * @var float
     */
    public $suezServiceFee;
    protected $_name = [
        'alreadyUsedTotalFee' => 'already_used_total_fee',
        'ancillaryRefundToBuyerMoney' => 'ancillary_refund_to_buyer_money',
        'modifyRefundToBuyerMoney' => 'modify_refund_to_buyer_money',
        'nonRefundableChangeServiceFee' => 'non_refundable_change_service_fee',
        'nonRefundableChangeUpgradeFee' => 'non_refundable_change_upgrade_fee',
        'nonRefundableTaxFee' => 'non_refundable_tax_fee',
        'nonRefundableTicketFee' => 'non_refundable_ticket_fee',
        'refundToBuyerMoney' => 'refund_to_buyer_money',
        'suezServiceFee' => 'suez_service_fee',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alreadyUsedTotalFee) {
            $res['already_used_total_fee'] = $this->alreadyUsedTotalFee;
        }

        if (null !== $this->ancillaryRefundToBuyerMoney) {
            $res['ancillary_refund_to_buyer_money'] = $this->ancillaryRefundToBuyerMoney;
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

        if (null !== $this->suezServiceFee) {
            $res['suez_service_fee'] = $this->suezServiceFee;
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
        if (isset($map['already_used_total_fee'])) {
            $model->alreadyUsedTotalFee = $map['already_used_total_fee'];
        }

        if (isset($map['ancillary_refund_to_buyer_money'])) {
            $model->ancillaryRefundToBuyerMoney = $map['ancillary_refund_to_buyer_money'];
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

        if (isset($map['suez_service_fee'])) {
            $model->suezServiceFee = $map['suez_service_fee'];
        }

        return $model;
    }
}
