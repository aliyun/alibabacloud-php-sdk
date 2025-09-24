<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourceCoverageTotalResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourceCoverageTotalResponseBody\data\periodCoverage;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourceCoverageTotalResponseBody\data\totalCoverage;

class data extends Model
{
    /**
     * @var periodCoverage[]
     */
    public $periodCoverage;

    /**
     * @var totalCoverage
     */
    public $totalCoverage;
    protected $_name = [
        'periodCoverage' => 'PeriodCoverage',
        'totalCoverage' => 'TotalCoverage',
    ];

    public function validate()
    {
        if (\is_array($this->periodCoverage)) {
            Model::validateArray($this->periodCoverage);
        }
        if (null !== $this->totalCoverage) {
            $this->totalCoverage->validate();
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

        if (null !== $this->totalCoverage) {
            $res['TotalCoverage'] = null !== $this->totalCoverage ? $this->totalCoverage->toArray($noStream) : $this->totalCoverage;
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

        if (isset($map['TotalCoverage'])) {
            $model->totalCoverage = totalCoverage::fromMap($map['TotalCoverage']);
        }

        return $model;
    }
}
