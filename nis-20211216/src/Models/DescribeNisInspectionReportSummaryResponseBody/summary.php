<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionReportSummaryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionReportSummaryResponseBody\summary\passRateSummary;
use AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionReportSummaryResponseBody\summary\riskSummary;

class summary extends Model
{
    /**
     * @var int
     */
    public $checkItemCount;

    /**
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
        'checkItemCount' => 'CheckItemCount',
        'checkResourceCount' => 'CheckResourceCount',
        'passRateSummary' => 'PassRateSummary',
        'riskSummary' => 'RiskSummary',
    ];

    public function validate()
    {
        if (\is_array($this->passRateSummary)) {
            Model::validateArray($this->passRateSummary);
        }
        if (\is_array($this->riskSummary)) {
            Model::validateArray($this->riskSummary);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkItemCount) {
            $res['CheckItemCount'] = $this->checkItemCount;
        }

        if (null !== $this->checkResourceCount) {
            $res['CheckResourceCount'] = $this->checkResourceCount;
        }

        if (null !== $this->passRateSummary) {
            if (\is_array($this->passRateSummary)) {
                $res['PassRateSummary'] = [];
                $n1 = 0;
                foreach ($this->passRateSummary as $item1) {
                    $res['PassRateSummary'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->riskSummary) {
            if (\is_array($this->riskSummary)) {
                $res['RiskSummary'] = [];
                $n1 = 0;
                foreach ($this->riskSummary as $item1) {
                    $res['RiskSummary'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CheckItemCount'])) {
            $model->checkItemCount = $map['CheckItemCount'];
        }

        if (isset($map['CheckResourceCount'])) {
            $model->checkResourceCount = $map['CheckResourceCount'];
        }

        if (isset($map['PassRateSummary'])) {
            if (!empty($map['PassRateSummary'])) {
                $model->passRateSummary = [];
                $n1 = 0;
                foreach ($map['PassRateSummary'] as $item1) {
                    $model->passRateSummary[$n1] = passRateSummary::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RiskSummary'])) {
            if (!empty($map['RiskSummary'])) {
                $model->riskSummary = [];
                $n1 = 0;
                foreach ($map['RiskSummary'] as $item1) {
                    $model->riskSummary[$n1] = riskSummary::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
