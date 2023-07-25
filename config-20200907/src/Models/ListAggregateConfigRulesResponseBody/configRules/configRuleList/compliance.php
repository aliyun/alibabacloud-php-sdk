<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigRulesResponseBody\configRules\configRuleList;

use AlibabaCloud\Tea\Model;

class compliance extends Model
{
    /**
     * @description The summary result of the rule compliance evaluation. Valid values:
     *
     *   COMPLIANT: The resource was evaluated as compliant.
     *   NON_COMPLIANT: The resource was evaluated as incompliant.
     *   NOT_APPLICABLE: The rule did not apply to your resources.
     *   INSUFFICIENT_DATA: No resource data was available.
     *
     * @example COMPLIANT
     *
     * @var string
     */
    public $complianceType;

    /**
     * @description The number of evaluation resources that correspond to the summary result of the rule compliance evaluation.
     *
     * @example 2
     *
     * @var int
     */
    public $count;
    protected $_name = [
        'complianceType' => 'ComplianceType',
        'count'          => 'Count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->complianceType) {
            $res['ComplianceType'] = $this->complianceType;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return compliance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComplianceType'])) {
            $model->complianceType = $map['ComplianceType'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
