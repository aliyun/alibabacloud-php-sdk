<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataTotalCountResponseBody\dataCount;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataTotalCountResponseBody\dataCount\column\columnRuleTop;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataTotalCountResponseBody\dataCount\column\riskCountList;
use AlibabaCloud\Tea\Model;

class column extends Model
{
    /**
     * @var int
     */
    public $lastSensitiveCount;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $sensitiveCount;

    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $lastCount;

    /**
     * @var riskCountList[]
     */
    public $riskCountList;

    /**
     * @var columnRuleTop[]
     */
    public $columnRuleTop;
    protected $_name = [
        'lastSensitiveCount' => 'LastSensitiveCount',
        'totalCount'         => 'TotalCount',
        'sensitiveCount'     => 'SensitiveCount',
        'count'              => 'Count',
        'lastCount'          => 'LastCount',
        'riskCountList'      => 'RiskCountList',
        'columnRuleTop'      => 'ColumnRuleTop',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lastSensitiveCount) {
            $res['LastSensitiveCount'] = $this->lastSensitiveCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->sensitiveCount) {
            $res['SensitiveCount'] = $this->sensitiveCount;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->lastCount) {
            $res['LastCount'] = $this->lastCount;
        }
        if (null !== $this->riskCountList) {
            $res['RiskCountList'] = [];
            if (null !== $this->riskCountList && \is_array($this->riskCountList)) {
                $n = 0;
                foreach ($this->riskCountList as $item) {
                    $res['RiskCountList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->columnRuleTop) {
            $res['ColumnRuleTop'] = [];
            if (null !== $this->columnRuleTop && \is_array($this->columnRuleTop)) {
                $n = 0;
                foreach ($this->columnRuleTop as $item) {
                    $res['ColumnRuleTop'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return column
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LastSensitiveCount'])) {
            $model->lastSensitiveCount = $map['LastSensitiveCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['SensitiveCount'])) {
            $model->sensitiveCount = $map['SensitiveCount'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['LastCount'])) {
            $model->lastCount = $map['LastCount'];
        }
        if (isset($map['RiskCountList'])) {
            if (!empty($map['RiskCountList'])) {
                $model->riskCountList = [];
                $n                    = 0;
                foreach ($map['RiskCountList'] as $item) {
                    $model->riskCountList[$n++] = null !== $item ? riskCountList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ColumnRuleTop'])) {
            if (!empty($map['ColumnRuleTop'])) {
                $model->columnRuleTop = [];
                $n                    = 0;
                foreach ($map['ColumnRuleTop'] as $item) {
                    $model->columnRuleTop[$n++] = null !== $item ? columnRuleTop::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
