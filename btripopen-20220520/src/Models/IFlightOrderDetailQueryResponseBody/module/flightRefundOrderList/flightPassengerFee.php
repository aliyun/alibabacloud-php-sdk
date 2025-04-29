<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderDetailQueryResponseBody\module\flightRefundOrderList;

use AlibabaCloud\Dara\Model;

class flightPassengerFee extends Model
{
    /**
     * @var int
     */
    public $noRefundModifyHandFee;

    /**
     * @var int
     */
    public $noRefundModifyUpgradeFee;

    /**
     * @var int
     */
    public $refundAmount;

    /**
     * @var int
     */
    public $refundHandFee;

    /**
     * @var int
     */
    public $refundModifyAmount;

    /**
     * @var int
     */
    public $refundModifyHandAmount;

    /**
     * @var int
     */
    public $refundModifyUpgradeAmount;

    /**
     * @var int
     */
    public $refundTaxHandFee;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'noRefundModifyHandFee' => 'no_refund_modify_hand_fee',
        'noRefundModifyUpgradeFee' => 'no_refund_modify_upgrade_fee',
        'refundAmount' => 'refund_amount',
        'refundHandFee' => 'refund_hand_fee',
        'refundModifyAmount' => 'refund_modify_amount',
        'refundModifyHandAmount' => 'refund_modify_hand_amount',
        'refundModifyUpgradeAmount' => 'refund_modify_upgrade_amount',
        'refundTaxHandFee' => 'refund_tax_hand_fee',
        'userId' => 'user_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->noRefundModifyHandFee) {
            $res['no_refund_modify_hand_fee'] = $this->noRefundModifyHandFee;
        }

        if (null !== $this->noRefundModifyUpgradeFee) {
            $res['no_refund_modify_upgrade_fee'] = $this->noRefundModifyUpgradeFee;
        }

        if (null !== $this->refundAmount) {
            $res['refund_amount'] = $this->refundAmount;
        }

        if (null !== $this->refundHandFee) {
            $res['refund_hand_fee'] = $this->refundHandFee;
        }

        if (null !== $this->refundModifyAmount) {
            $res['refund_modify_amount'] = $this->refundModifyAmount;
        }

        if (null !== $this->refundModifyHandAmount) {
            $res['refund_modify_hand_amount'] = $this->refundModifyHandAmount;
        }

        if (null !== $this->refundModifyUpgradeAmount) {
            $res['refund_modify_upgrade_amount'] = $this->refundModifyUpgradeAmount;
        }

        if (null !== $this->refundTaxHandFee) {
            $res['refund_tax_hand_fee'] = $this->refundTaxHandFee;
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
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
        if (isset($map['no_refund_modify_hand_fee'])) {
            $model->noRefundModifyHandFee = $map['no_refund_modify_hand_fee'];
        }

        if (isset($map['no_refund_modify_upgrade_fee'])) {
            $model->noRefundModifyUpgradeFee = $map['no_refund_modify_upgrade_fee'];
        }

        if (isset($map['refund_amount'])) {
            $model->refundAmount = $map['refund_amount'];
        }

        if (isset($map['refund_hand_fee'])) {
            $model->refundHandFee = $map['refund_hand_fee'];
        }

        if (isset($map['refund_modify_amount'])) {
            $model->refundModifyAmount = $map['refund_modify_amount'];
        }

        if (isset($map['refund_modify_hand_amount'])) {
            $model->refundModifyHandAmount = $map['refund_modify_hand_amount'];
        }

        if (isset($map['refund_modify_upgrade_amount'])) {
            $model->refundModifyUpgradeAmount = $map['refund_modify_upgrade_amount'];
        }

        if (isset($map['refund_tax_hand_fee'])) {
            $model->refundTaxHandFee = $map['refund_tax_hand_fee'];
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
