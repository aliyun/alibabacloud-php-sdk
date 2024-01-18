<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\DataRefundChangeRuleMapValue;

use AlibabaCloud\Tea\Model;

class refundRuleAllUnusedList extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $type;

    /**
     * @example hour
     *
     * @var string
     */
    public $timeUnit;

    /**
     * @example 36
     *
     * @var int
     */
    public $ruleStartTime;

    /**
     * @example 12
     *
     * @var int
     */
    public $ruleEndTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $canRefund;

    /**
     * @example 200
     *
     * @var float
     */
    public $refundFee;

    /**
     * @example true
     *
     * @var bool
     */
    public $canReturnAllTax;

    /**
     * @example 100
     *
     * @var float
     */
    public $returnPartTaxFee;
    protected $_name = [
        'type'             => 'type',
        'timeUnit'         => 'time_unit',
        'ruleStartTime'    => 'rule_start_time',
        'ruleEndTime'      => 'rule_end_time',
        'canRefund'        => 'can_refund',
        'refundFee'        => 'refund_fee',
        'canReturnAllTax'  => 'can_return_all_tax',
        'returnPartTaxFee' => 'return_part_tax_fee',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->timeUnit) {
            $res['time_unit'] = $this->timeUnit;
        }
        if (null !== $this->ruleStartTime) {
            $res['rule_start_time'] = $this->ruleStartTime;
        }
        if (null !== $this->ruleEndTime) {
            $res['rule_end_time'] = $this->ruleEndTime;
        }
        if (null !== $this->canRefund) {
            $res['can_refund'] = $this->canRefund;
        }
        if (null !== $this->refundFee) {
            $res['refund_fee'] = $this->refundFee;
        }
        if (null !== $this->canReturnAllTax) {
            $res['can_return_all_tax'] = $this->canReturnAllTax;
        }
        if (null !== $this->returnPartTaxFee) {
            $res['return_part_tax_fee'] = $this->returnPartTaxFee;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return refundRuleAllUnusedList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['time_unit'])) {
            $model->timeUnit = $map['time_unit'];
        }
        if (isset($map['rule_start_time'])) {
            $model->ruleStartTime = $map['rule_start_time'];
        }
        if (isset($map['rule_end_time'])) {
            $model->ruleEndTime = $map['rule_end_time'];
        }
        if (isset($map['can_refund'])) {
            $model->canRefund = $map['can_refund'];
        }
        if (isset($map['refund_fee'])) {
            $model->refundFee = $map['refund_fee'];
        }
        if (isset($map['can_return_all_tax'])) {
            $model->canReturnAllTax = $map['can_return_all_tax'];
        }
        if (isset($map['return_part_tax_fee'])) {
            $model->returnPartTaxFee = $map['return_part_tax_fee'];
        }

        return $model;
    }
}
