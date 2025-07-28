<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models;

use AlibabaCloud\SDK\Yunjian\V20211217\Models\QueryPeriodBudgetBillResponseBody\periodBudgetBillDTOS;
use AlibabaCloud\Tea\Model;

class QueryPeriodBudgetBillResponseBody extends Model
{
    /**
     * @var periodBudgetBillDTOS[]
     */
    public $periodBudgetBillDTOS;
    protected $_name = [
        'periodBudgetBillDTOS' => 'periodBudgetBillDTOS',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->periodBudgetBillDTOS) {
            $res['periodBudgetBillDTOS'] = [];
            if (null !== $this->periodBudgetBillDTOS && \is_array($this->periodBudgetBillDTOS)) {
                $n = 0;
                foreach ($this->periodBudgetBillDTOS as $item) {
                    $res['periodBudgetBillDTOS'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryPeriodBudgetBillResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['periodBudgetBillDTOS'])) {
            if (!empty($map['periodBudgetBillDTOS'])) {
                $model->periodBudgetBillDTOS = [];
                $n = 0;
                foreach ($map['periodBudgetBillDTOS'] as $item) {
                    $model->periodBudgetBillDTOS[$n++] = null !== $item ? periodBudgetBillDTOS::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
