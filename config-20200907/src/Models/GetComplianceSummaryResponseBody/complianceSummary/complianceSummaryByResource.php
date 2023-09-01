<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetComplianceSummaryResponseBody\complianceSummary;

use AlibabaCloud\Tea\Model;

class complianceSummaryByResource extends Model
{
    /**
     * @description The time when the compliance summary was generated. Unit: milliseconds.
     *
     * @example 1589853712165
     *
     * @var int
     */
    public $complianceSummaryTimestamp;

    /**
     * @description The number of resources evaluated as compliant.
     *
     * @example 1
     *
     * @var int
     */
    public $compliantCount;

    /**
     * @description The number of resources evaluated as non-compliant.
     *
     * @example 12
     *
     * @var int
     */
    public $nonCompliantCount;

    /**
     * @description The total number of resources.
     *
     * @example 13
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
     * @return complianceSummaryByResource
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
