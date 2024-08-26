<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionReportSummaryResponseBody\summary;

use AlibabaCloud\Tea\Model;

class riskSummary extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $resourceCount;

    /**
     * @example 3
     *
     * @var int
     */
    public $riskCount;

    /**
     * @example HighRisk
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @example StabilityRisk
     *
     * @var string
     */
    public $riskType;
    protected $_name = [
        'resourceCount' => 'ResourceCount',
        'riskCount'     => 'RiskCount',
        'riskLevel'     => 'RiskLevel',
        'riskType'      => 'RiskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceCount) {
            $res['ResourceCount'] = $this->resourceCount;
        }
        if (null !== $this->riskCount) {
            $res['RiskCount'] = $this->riskCount;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->riskType) {
            $res['RiskType'] = $this->riskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return riskSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceCount'])) {
            $model->resourceCount = $map['ResourceCount'];
        }
        if (isset($map['RiskCount'])) {
            $model->riskCount = $map['RiskCount'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['RiskType'])) {
            $model->riskType = $map['RiskType'];
        }

        return $model;
    }
}
