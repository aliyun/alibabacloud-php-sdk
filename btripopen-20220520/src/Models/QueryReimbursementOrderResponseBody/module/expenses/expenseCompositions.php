<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\QueryReimbursementOrderResponseBody\module\expenses;

use AlibabaCloud\Dara\Model;

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
    public $orderId;

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
        'feeType' => 'fee_type',
        'orderId' => 'order_id',
        'remark' => 'remark',
        'remindTagList' => 'remind_tag_list',
        'settlementAmount' => 'settlement_amount',
        'settlementTime' => 'settlement_time',
        'voucherType' => 'voucher_type',
    ];

    public function validate()
    {
        if (\is_array($this->remindTagList)) {
            Model::validateArray($this->remindTagList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }

        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }

        if (null !== $this->remindTagList) {
            if (\is_array($this->remindTagList)) {
                $res['remind_tag_list'] = [];
                $n1 = 0;
                foreach ($this->remindTagList as $item1) {
                    $res['remind_tag_list'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }

        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }

        if (isset($map['remind_tag_list'])) {
            if (!empty($map['remind_tag_list'])) {
                $model->remindTagList = [];
                $n1 = 0;
                foreach ($map['remind_tag_list'] as $item1) {
                    $model->remindTagList[$n1++] = $item1;
                }
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
