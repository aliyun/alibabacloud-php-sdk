<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class ModuleItemListSubItemsRefundChangeRuleOfferPenaltyInfoMapValue extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $struct;

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
     * @example true
     *
     * @var bool
     */
    public $upgradeFeeInd;

    /**
     * @example false
     *
     * @var bool
     */
    public $reissueInd;

    /**
     * @example 0
     *
     * @var int
     */
    public $penaltyTypeCode;

    /**
     * @example 1
     *
     * @var int
     */
    public $penaltyApplyRangeCode;

    /**
     * @example 0
     *
     * @var int
     */
    public $penaltyChargeTypeCode;

    /**
     * @example 300
     *
     * @var float
     */
    public $fee;

    /**
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @example 30
     *
     * @var float
     */
    public $penaltyPercent;

    /**
     * @example 48
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $timeUnitCode;
    protected $_name = [
        'struct'                => 'struct',
        'cancelFeeInd'          => 'cancel_fee_ind',
        'changeFeeInd'          => 'change_fee_ind',
        'upgradeFeeInd'         => 'upgrade_fee_ind',
        'reissueInd'            => 'reissue_ind',
        'penaltyTypeCode'       => 'penalty_type_code',
        'penaltyApplyRangeCode' => 'penalty_apply_range_code',
        'penaltyChargeTypeCode' => 'penalty_charge_type_code',
        'fee'                   => 'fee',
        'currency'              => 'currency',
        'penaltyPercent'        => 'penalty_percent',
        'startTime'             => 'start_time',
        'endTime'               => 'end_time',
        'timeUnitCode'          => 'time_unit_code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->struct) {
            $res['struct'] = $this->struct;
        }
        if (null !== $this->cancelFeeInd) {
            $res['cancel_fee_ind'] = $this->cancelFeeInd;
        }
        if (null !== $this->changeFeeInd) {
            $res['change_fee_ind'] = $this->changeFeeInd;
        }
        if (null !== $this->upgradeFeeInd) {
            $res['upgrade_fee_ind'] = $this->upgradeFeeInd;
        }
        if (null !== $this->reissueInd) {
            $res['reissue_ind'] = $this->reissueInd;
        }
        if (null !== $this->penaltyTypeCode) {
            $res['penalty_type_code'] = $this->penaltyTypeCode;
        }
        if (null !== $this->penaltyApplyRangeCode) {
            $res['penalty_apply_range_code'] = $this->penaltyApplyRangeCode;
        }
        if (null !== $this->penaltyChargeTypeCode) {
            $res['penalty_charge_type_code'] = $this->penaltyChargeTypeCode;
        }
        if (null !== $this->fee) {
            $res['fee'] = $this->fee;
        }
        if (null !== $this->currency) {
            $res['currency'] = $this->currency;
        }
        if (null !== $this->penaltyPercent) {
            $res['penalty_percent'] = $this->penaltyPercent;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->timeUnitCode) {
            $res['time_unit_code'] = $this->timeUnitCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModuleItemListSubItemsRefundChangeRuleOfferPenaltyInfoMapValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['struct'])) {
            $model->struct = $map['struct'];
        }
        if (isset($map['cancel_fee_ind'])) {
            $model->cancelFeeInd = $map['cancel_fee_ind'];
        }
        if (isset($map['change_fee_ind'])) {
            $model->changeFeeInd = $map['change_fee_ind'];
        }
        if (isset($map['upgrade_fee_ind'])) {
            $model->upgradeFeeInd = $map['upgrade_fee_ind'];
        }
        if (isset($map['reissue_ind'])) {
            $model->reissueInd = $map['reissue_ind'];
        }
        if (isset($map['penalty_type_code'])) {
            $model->penaltyTypeCode = $map['penalty_type_code'];
        }
        if (isset($map['penalty_apply_range_code'])) {
            $model->penaltyApplyRangeCode = $map['penalty_apply_range_code'];
        }
        if (isset($map['penalty_charge_type_code'])) {
            $model->penaltyChargeTypeCode = $map['penalty_charge_type_code'];
        }
        if (isset($map['fee'])) {
            $model->fee = $map['fee'];
        }
        if (isset($map['currency'])) {
            $model->currency = $map['currency'];
        }
        if (isset($map['penalty_percent'])) {
            $model->penaltyPercent = $map['penalty_percent'];
        }
        if (isset($map['start_time'])) {
            $model->startTime = $map['start_time'];
        }
        if (isset($map['end_time'])) {
            $model->endTime = $map['end_time'];
        }
        if (isset($map['time_unit_code'])) {
            $model->timeUnitCode = $map['time_unit_code'];
        }

        return $model;
    }
}
