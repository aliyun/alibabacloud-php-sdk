<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSavingsPlansUsageTotalResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSavingsPlansUsageTotalResponseBody\data\periodCoverage;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSavingsPlansUsageTotalResponseBody\data\totalUsage;

class data extends Model
{
    /**
     * @var periodCoverage[]
     */
    public $periodCoverage;

    /**
     * @var totalUsage
     */
    public $totalUsage;
    protected $_name = [
        'periodCoverage' => 'PeriodCoverage',
        'totalUsage' => 'TotalUsage',
    ];

    public function validate()
    {
        if (\is_array($this->periodCoverage)) {
            Model::validateArray($this->periodCoverage);
        }
        if (null !== $this->totalUsage) {
            $this->totalUsage->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->periodCoverage) {
            if (\is_array($this->periodCoverage)) {
                $res['PeriodCoverage'] = [];
                $n1 = 0;
                foreach ($this->periodCoverage as $item1) {
                    $res['PeriodCoverage'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalUsage) {
            $res['TotalUsage'] = null !== $this->totalUsage ? $this->totalUsage->toArray($noStream) : $this->totalUsage;
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
        if (isset($map['PeriodCoverage'])) {
            if (!empty($map['PeriodCoverage'])) {
                $model->periodCoverage = [];
                $n1 = 0;
                foreach ($map['PeriodCoverage'] as $item1) {
                    $model->periodCoverage[$n1] = periodCoverage::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalUsage'])) {
            $model->totalUsage = totalUsage::fromMap($map['TotalUsage']);
        }

        return $model;
    }
}
