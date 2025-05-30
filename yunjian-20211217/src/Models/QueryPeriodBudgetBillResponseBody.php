<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\QueryPeriodBudgetBillResponseBody\periodBudgetBillDTOS;

class QueryPeriodBudgetBillResponseBody extends Model
{
    /**
     * @var periodBudgetBillDTOS[]
     */
    public $periodBudgetBillDTOS;
    protected $_name = [
        'periodBudgetBillDTOS' => 'periodBudgetBillDTOS',
    ];

    public function validate()
    {
        if (\is_array($this->periodBudgetBillDTOS)) {
            Model::validateArray($this->periodBudgetBillDTOS);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->periodBudgetBillDTOS) {
            if (\is_array($this->periodBudgetBillDTOS)) {
                $res['periodBudgetBillDTOS'] = [];
                $n1 = 0;
                foreach ($this->periodBudgetBillDTOS as $item1) {
                    $res['periodBudgetBillDTOS'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['periodBudgetBillDTOS'])) {
            if (!empty($map['periodBudgetBillDTOS'])) {
                $model->periodBudgetBillDTOS = [];
                $n1 = 0;
                foreach ($map['periodBudgetBillDTOS'] as $item1) {
                    $model->periodBudgetBillDTOS[$n1++] = periodBudgetBillDTOS::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
