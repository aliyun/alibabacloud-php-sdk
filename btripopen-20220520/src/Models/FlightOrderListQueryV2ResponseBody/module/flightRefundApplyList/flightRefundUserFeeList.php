<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\flightRefundApplyList;

use AlibabaCloud\Tea\Model;

class flightRefundUserFeeList extends Model
{
    /**
     * @var float
     */
    public $alreadyUseAmount;

    /**
     * @var float
     */
    public $nonRefundableReshopChangeAmount;

    /**
     * @var float
     */
    public $nonRefundableReshopUpgradeAmount;

    /**
     * @var float
     */
    public $refundAmount;

    /**
     * @var float
     */
    public $refundCorpAmount;

    /**
     * @var float
     */
    public $refundHandFee;

    /**
     * @var float
     */
    public $refundPersonAmount;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'alreadyUseAmount'                 => 'already_use_amount',
        'nonRefundableReshopChangeAmount'  => 'non_refundable_reshop_change_amount',
        'nonRefundableReshopUpgradeAmount' => 'non_refundable_reshop_upgrade_amount',
        'refundAmount'                     => 'refund_amount',
        'refundCorpAmount'                 => 'refund_corp_amount',
        'refundHandFee'                    => 'refund_hand_fee',
        'refundPersonAmount'               => 'refund_person_amount',
        'userId'                           => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alreadyUseAmount) {
            $res['already_use_amount'] = $this->alreadyUseAmount;
        }
        if (null !== $this->nonRefundableReshopChangeAmount) {
            $res['non_refundable_reshop_change_amount'] = $this->nonRefundableReshopChangeAmount;
        }
        if (null !== $this->nonRefundableReshopUpgradeAmount) {
            $res['non_refundable_reshop_upgrade_amount'] = $this->nonRefundableReshopUpgradeAmount;
        }
        if (null !== $this->refundAmount) {
            $res['refund_amount'] = $this->refundAmount;
        }
        if (null !== $this->refundCorpAmount) {
            $res['refund_corp_amount'] = $this->refundCorpAmount;
        }
        if (null !== $this->refundHandFee) {
            $res['refund_hand_fee'] = $this->refundHandFee;
        }
        if (null !== $this->refundPersonAmount) {
            $res['refund_person_amount'] = $this->refundPersonAmount;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flightRefundUserFeeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['already_use_amount'])) {
            $model->alreadyUseAmount = $map['already_use_amount'];
        }
        if (isset($map['non_refundable_reshop_change_amount'])) {
            $model->nonRefundableReshopChangeAmount = $map['non_refundable_reshop_change_amount'];
        }
        if (isset($map['non_refundable_reshop_upgrade_amount'])) {
            $model->nonRefundableReshopUpgradeAmount = $map['non_refundable_reshop_upgrade_amount'];
        }
        if (isset($map['refund_amount'])) {
            $model->refundAmount = $map['refund_amount'];
        }
        if (isset($map['refund_corp_amount'])) {
            $model->refundCorpAmount = $map['refund_corp_amount'];
        }
        if (isset($map['refund_hand_fee'])) {
            $model->refundHandFee = $map['refund_hand_fee'];
        }
        if (isset($map['refund_person_amount'])) {
            $model->refundPersonAmount = $map['refund_person_amount'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
