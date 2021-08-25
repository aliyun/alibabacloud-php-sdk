<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleSummaryByRiskLevelResponseBody;

use AlibabaCloud\Tea\Model;

class configRuleSummaries extends Model
{
    /**
     * @var int
     */
    public $riskLevel;

    /**
     * @var int
     */
    public $compliantCount;

    /**
     * @var int
     */
    public $nonCompliantCount;
    protected $_name = [
        'riskLevel'         => 'RiskLevel',
        'compliantCount'    => 'CompliantCount',
        'nonCompliantCount' => 'NonCompliantCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->compliantCount) {
            $res['CompliantCount'] = $this->compliantCount;
        }
        if (null !== $this->nonCompliantCount) {
            $res['NonCompliantCount'] = $this->nonCompliantCount;
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
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['CompliantCount'])) {
            $model->compliantCount = $map['CompliantCount'];
        }
        if (isset($map['NonCompliantCount'])) {
            $model->nonCompliantCount = $map['NonCompliantCount'];
        }

        return $model;
    }
}
