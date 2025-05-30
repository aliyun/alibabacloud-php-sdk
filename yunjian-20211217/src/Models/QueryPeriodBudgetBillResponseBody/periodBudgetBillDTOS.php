<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models\QueryPeriodBudgetBillResponseBody;

use AlibabaCloud\Dara\Model;

class periodBudgetBillDTOS extends Model
{
    /**
     * @var float
     */
    public $bill;

    /**
     * @var float
     */
    public $budget;

    /**
     * @var float
     */
    public $lastYearBill;

    /**
     * @var string
     */
    public $month;
    protected $_name = [
        'bill' => 'bill',
        'budget' => 'budget',
        'lastYearBill' => 'lastYearBill',
        'month' => 'month',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bill) {
            $res['bill'] = $this->bill;
        }

        if (null !== $this->budget) {
            $res['budget'] = $this->budget;
        }

        if (null !== $this->lastYearBill) {
            $res['lastYearBill'] = $this->lastYearBill;
        }

        if (null !== $this->month) {
            $res['month'] = $this->month;
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
        if (isset($map['bill'])) {
            $model->bill = $map['bill'];
        }

        if (isset($map['budget'])) {
            $model->budget = $map['budget'];
        }

        if (isset($map['lastYearBill'])) {
            $model->lastYearBill = $map['lastYearBill'];
        }

        if (isset($map['month'])) {
            $model->month = $map['month'];
        }

        return $model;
    }
}
