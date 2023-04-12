<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class AttachConfigRuleToCompliancePackRequest extends Model
{
    /**
     * @description The ID of the compliance package to which you want to add the rule.
     *
     * For more information about how to obtain the ID of a compliance package, see [ListCompliancePacks](~~263332~~).
     * @example cp-5bb1626622af00bd****
     *
     * @var string
     */
    public $compliancePackId;

    /**
     * @description The ID of the rule to be added to the compliance package. Separate multiple rule IDs with commas (,).
     *
     * For more information about how to obtain the ID of a rule, see [ListConfigRules](~~169607~~).
     * @example cr-6cc4626622af00e7****
     *
     * @var string
     */
    public $configRuleIds;
    protected $_name = [
        'compliancePackId' => 'CompliancePackId',
        'configRuleIds'    => 'ConfigRuleIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compliancePackId) {
            $res['CompliancePackId'] = $this->compliancePackId;
        }
        if (null !== $this->configRuleIds) {
            $res['ConfigRuleIds'] = $this->configRuleIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachConfigRuleToCompliancePackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompliancePackId'])) {
            $model->compliancePackId = $map['CompliancePackId'];
        }
        if (isset($map['ConfigRuleIds'])) {
            $model->configRuleIds = $map['ConfigRuleIds'];
        }

        return $model;
    }
}
