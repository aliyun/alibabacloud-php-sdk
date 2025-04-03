<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateComplianceSummaryResponseBody\complianceSummary;

use AlibabaCloud\Dara\Model;

class complianceSummaryByResource extends Model
{
    /**
     * @var int
     */
    public $complianceSummaryTimestamp;

    /**
     * @var int
     */
    public $compliantCount;

    /**
     * @var int
     */
    public $nonCompliantCount;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'complianceSummaryTimestamp' => 'ComplianceSummaryTimestamp',
        'compliantCount' => 'CompliantCount',
        'nonCompliantCount' => 'NonCompliantCount',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
