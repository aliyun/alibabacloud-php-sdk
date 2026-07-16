<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopOtaSearchResponseBody\module\reShopItemList\subItems;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleReShopItemListSubItemsRefundChangeRuleOfferPenaltyInfoMapValue;

class refundChangeRule extends Model
{
    /**
     * @var bool
     */
    public $cancelFeeInd;

    /**
     * @var bool
     */
    public $changeFeeInd;

    /**
     * @var string
     */
    public $changeRuleDesc;

    /**
     * @var string
     */
    public $changeRuleShowColor;

    /**
     * @var ModuleReShopItemListSubItemsRefundChangeRuleOfferPenaltyInfoMapValue[][]
     */
    public $offerPenaltyInfoMap;

    /**
     * @var string
     */
    public $refundChangeDigest;

    /**
     * @var string
     */
    public $refundChangeRuleDesc;

    /**
     * @var string
     */
    public $refundRuleDesc;

    /**
     * @var string
     */
    public $refundRuleShowColor;

    /**
     * @var bool
     */
    public $structuredRefund;
    protected $_name = [
        'cancelFeeInd' => 'cancel_fee_ind',
        'changeFeeInd' => 'change_fee_ind',
        'changeRuleDesc' => 'change_rule_desc',
        'changeRuleShowColor' => 'change_rule_show_color',
        'offerPenaltyInfoMap' => 'offer_penalty_info_map',
        'refundChangeDigest' => 'refund_change_digest',
        'refundChangeRuleDesc' => 'refund_change_rule_desc',
        'refundRuleDesc' => 'refund_rule_desc',
        'refundRuleShowColor' => 'refund_rule_show_color',
        'structuredRefund' => 'structured_refund',
    ];

    public function validate()
    {
        if (\is_array($this->offerPenaltyInfoMap)) {
            Model::validateArray($this->offerPenaltyInfoMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cancelFeeInd) {
            $res['cancel_fee_ind'] = $this->cancelFeeInd;
        }

        if (null !== $this->changeFeeInd) {
            $res['change_fee_ind'] = $this->changeFeeInd;
        }

        if (null !== $this->changeRuleDesc) {
            $res['change_rule_desc'] = $this->changeRuleDesc;
        }

        if (null !== $this->changeRuleShowColor) {
            $res['change_rule_show_color'] = $this->changeRuleShowColor;
        }

        if (null !== $this->offerPenaltyInfoMap) {
            if (\is_array($this->offerPenaltyInfoMap)) {
                $res['offer_penalty_info_map'] = [];
                foreach ($this->offerPenaltyInfoMap as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['offer_penalty_info_map'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['offer_penalty_info_map'][$key1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (null !== $this->refundChangeDigest) {
            $res['refund_change_digest'] = $this->refundChangeDigest;
        }

        if (null !== $this->refundChangeRuleDesc) {
            $res['refund_change_rule_desc'] = $this->refundChangeRuleDesc;
        }

        if (null !== $this->refundRuleDesc) {
            $res['refund_rule_desc'] = $this->refundRuleDesc;
        }

        if (null !== $this->refundRuleShowColor) {
            $res['refund_rule_show_color'] = $this->refundRuleShowColor;
        }

        if (null !== $this->structuredRefund) {
            $res['structured_refund'] = $this->structuredRefund;
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
        if (isset($map['cancel_fee_ind'])) {
            $model->cancelFeeInd = $map['cancel_fee_ind'];
        }

        if (isset($map['change_fee_ind'])) {
            $model->changeFeeInd = $map['change_fee_ind'];
        }

        if (isset($map['change_rule_desc'])) {
            $model->changeRuleDesc = $map['change_rule_desc'];
        }

        if (isset($map['change_rule_show_color'])) {
            $model->changeRuleShowColor = $map['change_rule_show_color'];
        }

        if (isset($map['offer_penalty_info_map'])) {
            if (!empty($map['offer_penalty_info_map'])) {
                $model->offerPenaltyInfoMap = [];
                foreach ($map['offer_penalty_info_map'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->offerPenaltyInfoMap[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->offerPenaltyInfoMap[$key1][$n2] = ModuleReShopItemListSubItemsRefundChangeRuleOfferPenaltyInfoMapValue::fromMap($item2);
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (isset($map['refund_change_digest'])) {
            $model->refundChangeDigest = $map['refund_change_digest'];
        }

        if (isset($map['refund_change_rule_desc'])) {
            $model->refundChangeRuleDesc = $map['refund_change_rule_desc'];
        }

        if (isset($map['refund_rule_desc'])) {
            $model->refundRuleDesc = $map['refund_rule_desc'];
        }

        if (isset($map['refund_rule_show_color'])) {
            $model->refundRuleShowColor = $map['refund_rule_show_color'];
        }

        if (isset($map['structured_refund'])) {
            $model->structuredRefund = $map['structured_refund'];
        }

        return $model;
    }
}
