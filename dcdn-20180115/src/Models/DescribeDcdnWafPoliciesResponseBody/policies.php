<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafPoliciesResponseBody;

use AlibabaCloud\Tea\Model;

class policies extends Model
{
    /**
     * @description The type of the protection policy, which is the same as the DefenseScenes field in the QueryArgs parameter in request parameters.
     *
     * @example custom_acl
     *
     * @var string
     */
    public $defenseScene;

    /**
     * @description The number of domain names that use this protection policy.
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
     * @description The status of the protection policy, which is the same as the PolicyStatus field in the QueryArgs parameter in request parameters.
     *
     * @example on
     *
     * @var string
     */
    public $policyStatus;

    /**
     * @description Indicates whether this protection policy is the default policy, which is the same as the PolicyType field in the QueryArgs parameter in request parameters.
     *
     * @example default
     *
     * @var string
     */
    public $policyType;

    /**
     * @description The number of protection rules in this protection policy.
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
        if (null !== $this->ruleCount) {
            $res['RuleCount'] = $this->ruleCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policies
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
        if (isset($map['RuleCount'])) {
            $model->ruleCount = $map['RuleCount'];
        }

        return $model;
    }
}
