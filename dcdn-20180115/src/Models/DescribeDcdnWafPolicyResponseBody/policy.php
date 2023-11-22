<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class policy extends Model
{
    /**
     * @description The type of the protection policy. Valid values:
     *
     *   waf_group: basic web protection
     *   custom_acl: custom protection
     *   whitelist: whitelist
     *
     * @example waf_group
     *
     * @var string
     */
    public $defenseScene;

    /**
     * @description The number of domain names that use the protection policy.
     *
     * @example 22
     *
     * @var int
     */
    public $domainCount;

    /**
     * @description The time when the protection policy was modified. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2021-12-29T17:08:45Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the protection policy.
     *
     * @example 100001
     *
     * @var int
     */
    public $policyId;

    /**
     * @description The name of the protection policy.
     *
     * @example policy_test
     *
     * @var string
     */
    public $policyName;

    /**
     * @description The status of the protection policy. Valid values:
     *
     *   on
     *   off
     *
     * @example on
     *
     * @var string
     */
    public $policyStatus;

    /**
     * @description Indicates whether the current policy is the default policy. Valid values:
     *
     *   default
     *   custom
     *
     * @example default
     *
     * @var string
     */
    public $policyType;

    /**
     * @description The protection rule configurations that are defined in the protection policy. The configurations only support bot management. For more information, see [BatchCreateDcdnWafRules](~~BatchCreateDcdnWafRules~~).
     *
     * @example {     "type":"target_type",     "status":"on",     "config":{"target":"app"},     "action":""   }
     *
     * @var string
     */
    public $ruleConfigs;

    /**
     * @description The number of protection rules in the protection policy.
     *
     * @example 9
     *
     * @var int
     */
    public $ruleCount;
    protected $_name = [
        'defenseScene' => 'DefenseScene',
        'domainCount'  => 'DomainCount',
        'gmtModified'  => 'GmtModified',
        'policyId'     => 'PolicyId',
        'policyName'   => 'PolicyName',
        'policyStatus' => 'PolicyStatus',
        'policyType'   => 'PolicyType',
        'ruleConfigs'  => 'RuleConfigs',
        'ruleCount'    => 'RuleCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defenseScene) {
            $res['DefenseScene'] = $this->defenseScene;
        }
        if (null !== $this->domainCount) {
            $res['DomainCount'] = $this->domainCount;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->policyStatus) {
            $res['PolicyStatus'] = $this->policyStatus;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }
        if (null !== $this->ruleConfigs) {
            $res['RuleConfigs'] = $this->ruleConfigs;
        }
        if (null !== $this->ruleCount) {
            $res['RuleCount'] = $this->ruleCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefenseScene'])) {
            $model->defenseScene = $map['DefenseScene'];
        }
        if (isset($map['DomainCount'])) {
            $model->domainCount = $map['DomainCount'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['PolicyStatus'])) {
            $model->policyStatus = $map['PolicyStatus'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }
        if (isset($map['RuleConfigs'])) {
            $model->ruleConfigs = $map['RuleConfigs'];
        }
        if (isset($map['RuleCount'])) {
            $model->ruleCount = $map['RuleCount'];
        }

        return $model;
    }
}
