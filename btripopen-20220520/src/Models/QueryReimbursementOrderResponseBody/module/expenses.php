<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\QueryReimbursementOrderResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\QueryReimbursementOrderResponseBody\module\expenses\expenseCompositions;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\QueryReimbursementOrderResponseBody\module\expenses\invoiceInfos;

class expenses extends Model
{
    /**
     * @var string
     */
    public $amount;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $expenseCity;

    /**
     * @var expenseCompositions[]
     */
    public $expenseCompositions;

    /**
     * @var string
     */
    public $expenseTime;

    /**
     * @var string
     */
    public $expenseType;

    /**
     * @var string
     */
    public $expenseTypeCode;

    /**
     * @var invoiceInfos[]
     */
    public $invoiceInfos;

    /**
     * @var int
     */
    public $reimbExpenseId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $settlementType;
    protected $_name = [
        'amount' => 'amount',
        'currency' => 'currency',
        'expenseCity' => 'expense_city',
        'expenseCompositions' => 'expense_compositions',
        'expenseTime' => 'expense_time',
        'expenseType' => 'expense_type',
        'expenseTypeCode' => 'expense_type_code',
        'invoiceInfos' => 'invoice_infos',
        'reimbExpenseId' => 'reimb_expense_id',
        'remark' => 'remark',
        'settlementType' => 'settlement_type',
    ];

    public function validate()
    {
        if (\is_array($this->expenseCompositions)) {
            Model::validateArray($this->expenseCompositions);
        }
        if (\is_array($this->invoiceInfos)) {
            Model::validateArray($this->invoiceInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }

        if (null !== $this->currency) {
            $res['currency'] = $this->currency;
        }

        if (null !== $this->expenseCity) {
            $res['expense_city'] = $this->expenseCity;
        }

        if (null !== $this->expenseCompositions) {
            if (\is_array($this->expenseCompositions)) {
                $res['expense_compositions'] = [];
                $n1 = 0;
                foreach ($this->expenseCompositions as $item1) {
                    $res['expense_compositions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->expenseTime) {
            $res['expense_time'] = $this->expenseTime;
        }

        if (null !== $this->expenseType) {
            $res['expense_type'] = $this->expenseType;
        }

        if (null !== $this->expenseTypeCode) {
            $res['expense_type_code'] = $this->expenseTypeCode;
        }

        if (null !== $this->invoiceInfos) {
            if (\is_array($this->invoiceInfos)) {
                $res['invoice_infos'] = [];
                $n1 = 0;
                foreach ($this->invoiceInfos as $item1) {
                    $res['invoice_infos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->reimbExpenseId) {
            $res['reimb_expense_id'] = $this->reimbExpenseId;
        }

        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }

        if (null !== $this->settlementType) {
            $res['settlement_type'] = $this->settlementType;
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
        if (isset($map['amount'])) {
            $model->amount = $map['amount'];
        }

        if (isset($map['currency'])) {
            $model->currency = $map['currency'];
        }

        if (isset($map['expense_city'])) {
            $model->expenseCity = $map['expense_city'];
        }

        if (isset($map['expense_compositions'])) {
            if (!empty($map['expense_compositions'])) {
                $model->expenseCompositions = [];
                $n1 = 0;
                foreach ($map['expense_compositions'] as $item1) {
                    $model->expenseCompositions[$n1] = expenseCompositions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['expense_time'])) {
            $model->expenseTime = $map['expense_time'];
        }

        if (isset($map['expense_type'])) {
            $model->expenseType = $map['expense_type'];
        }

        if (isset($map['expense_type_code'])) {
            $model->expenseTypeCode = $map['expense_type_code'];
        }

        if (isset($map['invoice_infos'])) {
            if (!empty($map['invoice_infos'])) {
                $model->invoiceInfos = [];
                $n1 = 0;
                foreach ($map['invoice_infos'] as $item1) {
                    $model->invoiceInfos[$n1] = invoiceInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['reimb_expense_id'])) {
            $model->reimbExpenseId = $map['reimb_expense_id'];
        }

        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }

        if (isset($map['settlement_type'])) {
            $model->settlementType = $map['settlement_type'];
        }

        return $model;
    }
}
