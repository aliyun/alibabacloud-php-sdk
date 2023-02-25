<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class CreateDcdnWafPolicyRequest extends Model
{
    /**
     * @description The type of the WAF protection policy. Valid values:
     *
     *   waf_group: basic web protection
     *   custom_acl: custom protection
     *   whitelist: IP address whitelist
     *   ip_blacklist: IP address blacklist
     *   region_block: region blacklist
     *   bot: bot management
     *
     * @example waf_group
     *
     * @var string
     */
    public $defenseScene;

    /**
     * @description The name of the protection policy. The name can be up to 64 characters in length and can contain letters, digits, and underscores (\_).
     *
     * @example policy_test
     *
     * @var string
     */
    public $policyName;

    /**
     * @description The status of the protection policy. Valid values:
     *
     *   on: enabled
     *   off: disabled
     *
     * @example on
     *
     * @var string
     */
    public $policyStatus;

    /**
     * @description Specifies whether to set the current policy as the default policy. Valid values:
     *
     *   default: sets the current policy as the default policy.
     *   custom: does not set the current policy as the default policy.
     *
     * @example default
     *
     * @var string
     */
    public $policyType;
    protected $_name = [
        'defenseScene' => 'DefenseScene',
        'policyName'   => 'PolicyName',
        'policyStatus' => 'PolicyStatus',
        'policyType'   => 'PolicyType',
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
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->policyStatus) {
            $res['PolicyStatus'] = $this->policyStatus;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDcdnWafPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefenseScene'])) {
            $model->defenseScene = $map['DefenseScene'];
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

        return $model;
    }
}
