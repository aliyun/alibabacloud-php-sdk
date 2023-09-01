<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleComplianceByPackResponseBody\configRuleComplianceResult;

use AlibabaCloud\Tea\Model;

class configRuleCompliances extends Model
{
    /**
     * @description The compliance evaluation result. Valid values:
     *
     *   COMPLIANT: The relevant resources are evaluated as compliant.
     *   NON_COMPLIANT: The relevant resources are evaluated as non-compliant.
     *   NOT_APPLICABLE: The rule does not apply to your resources.
     *   INSUFFICIENT_DATA: No resource data is available.
     *
     * @example COMPLIANT
     *
     * @var string
     */
    public $complianceType;

    /**
     * @description The ID of the rule enabled in the compliance package.
     *
     * @example cr-fdc8626622af00f9****
     *
     * @var string
     */
    public $configRuleId;

    /**
     * @description The name of the rule enabled in the compliance package.
     *
     * @example test-rule-name
     *
     * @var string
     */
    public $configRuleName;
    protected $_name = [
        'complianceType' => 'ComplianceType',
        'configRuleId'   => 'ConfigRuleId',
        'configRuleName' => 'ConfigRuleName',
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
        if (null !== $this->configRuleId) {
            $res['ConfigRuleId'] = $this->configRuleId;
        }
        if (null !== $this->configRuleName) {
            $res['ConfigRuleName'] = $this->configRuleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configRuleCompliances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComplianceType'])) {
            $model->complianceType = $map['ComplianceType'];
        }
        if (isset($map['ConfigRuleId'])) {
            $model->configRuleId = $map['ConfigRuleId'];
        }
        if (isset($map['ConfigRuleName'])) {
            $model->configRuleName = $map['ConfigRuleName'];
        }

        return $model;
    }
}
