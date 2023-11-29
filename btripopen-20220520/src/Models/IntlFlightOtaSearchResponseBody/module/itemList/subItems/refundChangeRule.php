<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaSearchResponseBody\module\itemList\subItems;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleItemListSubItemsRefundChangeRuleOfferPenaltyInfoMapValue;
use AlibabaCloud\Tea\Model;

class refundChangeRule extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $cancelFeeInd;

    /**
     * @example true
     *
     * @var bool
     */
    public $changeFeeInd;

    /**
     * @var ModuleItemListSubItemsRefundChangeRuleOfferPenaltyInfoMapValue[][]
     */
    public $offerPenaltyInfoMap;

    /**
     * @var string
     */
    public $refundChangeDigest;

    /**
     * @example false
     *
     * @var bool
     */
    public $structuredRefund;
    protected $_name = [
        'cancelFeeInd'        => 'cancel_fee_ind',
        'changeFeeInd'        => 'change_fee_ind',
        'offerPenaltyInfoMap' => 'offer_penalty_info_map',
        'refundChangeDigest'  => 'refund_change_digest',
        'structuredRefund'    => 'structured_refund',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cancelFeeInd) {
            $res['cancel_fee_ind'] = $this->cancelFeeInd;
        }
        if (null !== $this->changeFeeInd) {
            $res['change_fee_ind'] = $this->changeFeeInd;
        }
        if (null !== $this->offerPenaltyInfoMap) {
            $res['offer_penalty_info_map'] = $this->offerPenaltyInfoMap;
        }
        if (null !== $this->refundChangeDigest) {
            $res['refund_change_digest'] = $this->refundChangeDigest;
        }
        if (null !== $this->structuredRefund) {
            $res['structured_refund'] = $this->structuredRefund;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return refundChangeRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cancel_fee_ind'])) {
            $model->cancelFeeInd = $map['cancel_fee_ind'];
        }
        if (isset($map['change_fee_ind'])) {
            $model->changeFeeInd = $map['change_fee_ind'];
        }
        if (isset($map['offer_penalty_info_map'])) {
            $model->offerPenaltyInfoMap = $map['offer_penalty_info_map'];
        }
        if (isset($map['refund_change_digest'])) {
            $model->refundChangeDigest = $map['refund_change_digest'];
        }
        if (isset($map['structured_refund'])) {
            $model->structuredRefund = $map['structured_refund'];
        }

        return $model;
    }
}
