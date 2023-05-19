<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourceUsageTotalResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourceUsageTotalResponseBody\data\periodCoverage;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourceUsageTotalResponseBody\data\totalUsage;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The total potential savings.
     *
     * @var periodCoverage[]
     */
    public $periodCoverage;

    /**
     * @description The total usage of deduction plans.
     *
     * @var totalUsage
     */
    public $totalUsage;
    protected $_name = [
        'periodCoverage' => 'PeriodCoverage',
        'totalUsage'     => 'TotalUsage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->periodCoverage) {
            $res['PeriodCoverage'] = [];
            if (null !== $this->periodCoverage && \is_array($this->periodCoverage)) {
                $n = 0;
                foreach ($this->periodCoverage as $item) {
                    $res['PeriodCoverage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalUsage) {
            $res['TotalUsage'] = null !== $this->totalUsage ? $this->totalUsage->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PeriodCoverage'])) {
            if (!empty($map['PeriodCoverage'])) {
                $model->periodCoverage = [];
                $n                     = 0;
                foreach ($map['PeriodCoverage'] as $item) {
                    $model->periodCoverage[$n++] = null !== $item ? periodCoverage::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalUsage'])) {
            $model->totalUsage = totalUsage::fromMap($map['TotalUsage']);
        }

        return $model;
    }
}
