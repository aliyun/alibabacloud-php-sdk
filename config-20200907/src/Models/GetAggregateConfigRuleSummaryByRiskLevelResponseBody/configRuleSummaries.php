<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleSummaryByRiskLevelResponseBody;

use AlibabaCloud\Dara\Model;

class configRuleSummaries extends Model
{
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
    public $riskLevel;
    protected $_name = [
        'compliantCount' => 'CompliantCount',
        'nonCompliantCount' => 'NonCompliantCount',
        'riskLevel' => 'RiskLevel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
