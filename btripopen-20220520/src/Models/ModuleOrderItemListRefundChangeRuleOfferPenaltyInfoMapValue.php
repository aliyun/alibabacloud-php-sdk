<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class ModuleOrderItemListRefundChangeRuleOfferPenaltyInfoMapValue extends Model
{
    /**
     * @var bool
     */
    public $struct;

    /**
     * @var bool
     */
    public $cancelFeeInd;

    /**
     * @var bool
     */
    public $changeFeeInd;

    /**
     * @var bool
     */
    public $upgradeFeeInd;

    /**
     * @var bool
     */
    public $reissueInd;

    /**
     * @var int
     */
    public $penaltyTypeCode;

    /**
     * @var int
     */
    public $penaltyApplyRangeCode;

    /**
     * @var int
     */
    public $penaltyChargeTypeCode;

    /**
     * @var float
     */
    public $fee;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var float
     */
    public $penaltyPercent;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $timeUnitCode;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'struct' => 'struct',
        'cancelFeeInd' => 'cancel_fee_ind',
        'changeFeeInd' => 'change_fee_ind',
        'upgradeFeeInd' => 'upgrade_fee_ind',
        'reissueInd' => 'reissue_ind',
        'penaltyTypeCode' => 'penalty_type_code',
        'penaltyApplyRangeCode' => 'penalty_apply_range_code',
        'penaltyChargeTypeCode' => 'penalty_charge_type_code',
        'fee' => 'fee',
        'currency' => 'currency',
        'penaltyPercent' => 'penalty_percent',
        'startTime' => 'start_time',
        'endTime' => 'end_time',
        'timeUnitCode' => 'time_unit_code',
        'title' => 'title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->title) {
            $res['title'] = $this->title;
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

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
