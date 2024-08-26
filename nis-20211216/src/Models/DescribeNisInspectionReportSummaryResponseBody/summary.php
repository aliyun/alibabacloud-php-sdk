<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionReportSummaryResponseBody;

use AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionReportSummaryResponseBody\summary\passRateSummary;
use AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionReportSummaryResponseBody\summary\riskSummary;
use AlibabaCloud\Tea\Model;

class summary extends Model
{
    /**
     * @example 11
     *
     * @var int
     */
    public $checkItemCount;

    /**
     * @example 123
     *
     * @var int
     */
    public $checkResourceCount;

    /**
     * @var passRateSummary[]
     */
    public $passRateSummary;

    /**
     * @var riskSummary[]
     */
    public $riskSummary;
    protected $_name = [
        'checkItemCount'     => 'CheckItemCount',
        'checkResourceCount' => 'CheckResourceCount',
        'passRateSummary'    => 'PassRateSummary',
        'riskSummary'        => 'RiskSummary',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkItemCount) {
            $res['CheckItemCount'] = $this->checkItemCount;
        }
        if (null !== $this->checkResourceCount) {
            $res['CheckResourceCount'] = $this->checkResourceCount;
        }
        if (null !== $this->passRateSummary) {
            $res['PassRateSummary'] = [];
            if (null !== $this->passRateSummary && \is_array($this->passRateSummary)) {
                $n = 0;
                foreach ($this->passRateSummary as $item) {
                    $res['PassRateSummary'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->riskSummary) {
            $res['RiskSummary'] = [];
            if (null !== $this->riskSummary && \is_array($this->riskSummary)) {
                $n = 0;
                foreach ($this->riskSummary as $item) {
                    $res['RiskSummary'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return summary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckItemCount'])) {
            $model->checkItemCount = $map['CheckItemCount'];
        }
        if (isset($map['CheckResourceCount'])) {
            $model->checkResourceCount = $map['CheckResourceCount'];
        }
        if (isset($map['PassRateSummary'])) {
            if (!empty($map['PassRateSummary'])) {
                $model->passRateSummary = [];
                $n                      = 0;
                foreach ($map['PassRateSummary'] as $item) {
                    $model->passRateSummary[$n++] = null !== $item ? passRateSummary::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RiskSummary'])) {
            if (!empty($map['RiskSummary'])) {
                $model->riskSummary = [];
                $n                  = 0;
                foreach ($map['RiskSummary'] as $item) {
                    $model->riskSummary[$n++] = null !== $item ? riskSummary::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
