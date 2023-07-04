<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\QueryReimbursementOrderResponseBody\module\expenses;

use AlibabaCloud\Tea\Model;

class expenseCompositions extends Model
{
    /**
     * @var int
     */
    public $billSettlementId;

    /**
     * @var string
     */
    public $capitalDirection;

    /**
     * @var string
     */
    public $feeType;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string[]
     */
    public $remindTagList;

    /**
     * @var string
     */
    public $settlementAmount;

    /**
     * @var string
     */
    public $settlementTime;

    /**
     * @var int
     */
    public $voucherType;
    protected $_name = [
        'billSettlementId' => 'bill_settlement_id',
        'capitalDirection' => 'capital_direction',
        'feeType'          => 'fee_type',
        'remark'           => 'remark',
        'remindTagList'    => 'remind_tag_list',
        'settlementAmount' => 'settlement_amount',
        'settlementTime'   => 'settlement_time',
        'voucherType'      => 'voucher_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billSettlementId) {
            $res['bill_settlement_id'] = $this->billSettlementId;
        }
        if (null !== $this->capitalDirection) {
            $res['capital_direction'] = $this->capitalDirection;
        }
        if (null !== $this->feeType) {
            $res['fee_type'] = $this->feeType;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->remindTagList) {
            $res['remind_tag_list'] = $this->remindTagList;
        }
        if (null !== $this->settlementAmount) {
            $res['settlement_amount'] = $this->settlementAmount;
        }
        if (null !== $this->settlementTime) {
            $res['settlement_time'] = $this->settlementTime;
        }
        if (null !== $this->voucherType) {
            $res['voucher_type'] = $this->voucherType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return expenseCompositions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bill_settlement_id'])) {
            $model->billSettlementId = $map['bill_settlement_id'];
        }
        if (isset($map['capital_direction'])) {
            $model->capitalDirection = $map['capital_direction'];
        }
        if (isset($map['fee_type'])) {
            $model->feeType = $map['fee_type'];
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }
        if (isset($map['remind_tag_list'])) {
            if (!empty($map['remind_tag_list'])) {
                $model->remindTagList = $map['remind_tag_list'];
            }
        }
        if (isset($map['settlement_amount'])) {
            $model->settlementAmount = $map['settlement_amount'];
        }
        if (isset($map['settlement_time'])) {
            $model->settlementTime = $map['settlement_time'];
        }
        if (isset($map['voucher_type'])) {
            $model->voucherType = $map['voucher_type'];
        }

        return $model;
    }
}
