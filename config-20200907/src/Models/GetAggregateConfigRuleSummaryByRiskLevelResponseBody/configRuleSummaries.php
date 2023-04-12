<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleSummaryByRiskLevelResponseBody;

use AlibabaCloud\Tea\Model;

class configRuleSummaries extends Model
{
    /**
     * @description The number of rules against which specific resources are evaluated as compliant.
     *
     * @example 3
     *
     * @var int
     */
    public $compliantCount;

    /**
     * @description The number of rules against which specific resources are evaluated as non-compliant.
     *
     * @example 1
     *
     * @var int
     */
    public $nonCompliantCount;

    /**
     * @description The risk level of the resources that are not compliant with the rules. Valid values:
     *
     *   1: high risk level.
     *   2: medium risk level.
     *   3: low risk level.
     *
     * @example 1
     *
     * @var int
     */
    public $riskLevel;
    protected $_name = [
        'compliantCount'    => 'CompliantCount',
        'nonCompliantCount' => 'NonCompliantCount',
        'riskLevel'         => 'RiskLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compliantCount) {
            $res['CompliantCount'] = $this->compliantCount;
        }
        if (null !== $this->nonCompliantCount) {
            $res['NonCompliantCount'] = $this->nonCompliantCount;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configRuleSummaries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompliantCount'])) {
            $model->compliantCount = $map['CompliantCount'];
        }
        if (isset($map['NonCompliantCount'])) {
            $model->nonCompliantCount = $map['NonCompliantCount'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        return $model;
    }
}
