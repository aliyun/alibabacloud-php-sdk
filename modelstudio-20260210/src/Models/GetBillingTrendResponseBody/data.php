<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetBillingTrendResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetBillingTrendResponseBody\data\costTotals;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetBillingTrendResponseBody\data\groupByTotal;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetBillingTrendResponseBody\data\resultByTime;

class data extends Model
{
    /**
     * @var costTotals
     */
    public $costTotals;

    /**
     * @var groupByTotal[]
     */
    public $groupByTotal;

    /**
     * @var resultByTime[]
     */
    public $resultByTime;
    protected $_name = [
        'costTotals' => 'costTotals',
        'groupByTotal' => 'groupByTotal',
        'resultByTime' => 'resultByTime',
    ];

    public function validate()
    {
        if (null !== $this->costTotals) {
            $this->costTotals->validate();
        }
        if (\is_array($this->groupByTotal)) {
            Model::validateArray($this->groupByTotal);
        }
        if (\is_array($this->resultByTime)) {
            Model::validateArray($this->resultByTime);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->costTotals) {
            $res['costTotals'] = null !== $this->costTotals ? $this->costTotals->toArray($noStream) : $this->costTotals;
        }

        if (null !== $this->groupByTotal) {
            if (\is_array($this->groupByTotal)) {
                $res['groupByTotal'] = [];
                $n1 = 0;
                foreach ($this->groupByTotal as $item1) {
                    $res['groupByTotal'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resultByTime) {
            if (\is_array($this->resultByTime)) {
                $res['resultByTime'] = [];
                $n1 = 0;
                foreach ($this->resultByTime as $item1) {
                    $res['resultByTime'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['costTotals'])) {
            $model->costTotals = costTotals::fromMap($map['costTotals']);
        }

        if (isset($map['groupByTotal'])) {
            if (!empty($map['groupByTotal'])) {
                $model->groupByTotal = [];
                $n1 = 0;
                foreach ($map['groupByTotal'] as $item1) {
                    $model->groupByTotal[$n1] = groupByTotal::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['resultByTime'])) {
            if (!empty($map['resultByTime'])) {
                $model->resultByTime = [];
                $n1 = 0;
                foreach ($map['resultByTime'] as $item1) {
                    $model->resultByTime[$n1] = resultByTime::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
