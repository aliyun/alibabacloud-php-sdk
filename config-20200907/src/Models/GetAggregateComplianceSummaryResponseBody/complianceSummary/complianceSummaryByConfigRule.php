<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateComplianceSummaryResponseBody\complianceSummary;

use AlibabaCloud\Tea\Model;

class complianceSummaryByConfigRule extends Model
{
    /**
     * @description The time when the compliance statistics were collected. Unit: milliseconds.
     *
     * @example 1589853822103
     *
     * @var int
     */
    public $complianceSummaryTimestamp;

    /**
     * @description The number of compliant rules.
     *
     * @example 4
     *
     * @var int
     */
    public $compliantCount;

    /**
     * @description The number of non-compliant rules.
     *
     * @example 5
     *
     * @var int
     */
    public $nonCompliantCount;

    /**
     * @description The total number of rules.
     *
     * @example 9
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'complianceSummaryTimestamp' => 'ComplianceSummaryTimestamp',
        'compliantCount'             => 'CompliantCount',
        'nonCompliantCount'          => 'NonCompliantCount',
        'totalCount'                 => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->complianceSummaryTimestamp) {
            $res['ComplianceSummaryTimestamp'] = $this->complianceSummaryTimestamp;
        }
        if (null !== $this->compliantCount) {
            $res['CompliantCount'] = $this->compliantCount;
        }
        if (null !== $this->nonCompliantCount) {
            $res['NonCompliantCount'] = $this->nonCompliantCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return complianceSummaryByConfigRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComplianceSummaryTimestamp'])) {
            $model->complianceSummaryTimestamp = $map['ComplianceSummaryTimestamp'];
        }
        if (isset($map['CompliantCount'])) {
            $model->compliantCount = $map['CompliantCount'];
        }
        if (isset($map['NonCompliantCount'])) {
            $model->nonCompliantCount = $map['NonCompliantCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
