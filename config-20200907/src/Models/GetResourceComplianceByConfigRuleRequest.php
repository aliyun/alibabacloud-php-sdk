<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class GetResourceComplianceByConfigRuleRequest extends Model
{
    /**
     * @description The compliance evaluation result of the resource. Valid values:
     *
     *   COMPLIANT: The resource is evaluated as compliant.
     *   NON_COMPLIANT: The resource is evaluated as non-compliant.
     *   NOT_APPLICABLE: The rule does not apply to the resource.
     *   INSUFFICIENT_DATA: No resource data is available.
     *
     * @example COMPLIANT
     *
     * @var string
     */
    public $complianceType;

    /**
     * @description The ID of the rule.
     *
     * This parameter is required.
     * @example cr-d369626622af008e****
     *
     * @var string
     */
    public $configRuleId;
    protected $_name = [
        'complianceType' => 'ComplianceType',
        'configRuleId'   => 'ConfigRuleId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResourceComplianceByConfigRuleRequest
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

        return $model;
    }
}
