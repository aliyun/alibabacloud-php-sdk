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
    public $highRiskRuleNonCompliantResourceCount;

    /**
     * @var int
     */
    public $lowRiskRuleNonCompliantResourceCount;

    /**
     * @var int
     */
    public $mediumRiskRuleNonCompliantResourceCount;

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
        'highRiskRuleNonCompliantResourceCount' => 'HighRiskRuleNonCompliantResourceCount',
        'lowRiskRuleNonCompliantResourceCount' => 'LowRiskRuleNonCompliantResourceCount',
        'mediumRiskRuleNonCompliantResourceCount' => 'MediumRiskRuleNonCompliantResourceCount',
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

        if (null !== $this->highRiskRuleNonCompliantResourceCount) {
            $res['HighRiskRuleNonCompliantResourceCount'] = $this->highRiskRuleNonCompliantResourceCount;
        }

        if (null !== $this->lowRiskRuleNonCompliantResourceCount) {
            $res['LowRiskRuleNonCompliantResourceCount'] = $this->lowRiskRuleNonCompliantResourceCount;
        }

        if (null !== $this->mediumRiskRuleNonCompliantResourceCount) {
            $res['MediumRiskRuleNonCompliantResourceCount'] = $this->mediumRiskRuleNonCompliantResourceCount;
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

        if (isset($map['HighRiskRuleNonCompliantResourceCount'])) {
            $model->highRiskRuleNonCompliantResourceCount = $map['HighRiskRuleNonCompliantResourceCount'];
        }

        if (isset($map['LowRiskRuleNonCompliantResourceCount'])) {
            $model->lowRiskRuleNonCompliantResourceCount = $map['LowRiskRuleNonCompliantResourceCount'];
        }

        if (isset($map['MediumRiskRuleNonCompliantResourceCount'])) {
            $model->mediumRiskRuleNonCompliantResourceCount = $map['MediumRiskRuleNonCompliantResourceCount'];
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
