<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafScenesResponseBody;

use AlibabaCloud\Tea\Model;

class defenseScenes extends Model
{
    /**
     * @description The types of the protection policies.
     *
     * @example waf_group
     *
     * @var string
     */
    public $defenseScene;

    /**
     * @description The total number of protection rules that were configured in this type of the policy.
     *
     * @example 10
     *
     * @var int
     */
    public $policyCount;

    /**
     * @description The types of the protection policies that you want to query. Separate multiple types with commas (,). Valid values:
     *
     *   waf_group: basic web protection
     *   custom_acl: custom protection
     *   whitelist: IP address whitelist
     *   ip_blacklist: IP address blacklist
     *   region_block: region blacklist
     *   bot: bot management
     *
     * >  If you do not set this parameter, all types of protection policies are queried.
     * @example 12
     *
     * @var int
     */
    public $ruleCount;
    protected $_name = [
        'defenseScene' => 'DefenseScene',
        'policyCount'  => 'PolicyCount',
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
        if (null !== $this->policyCount) {
            $res['PolicyCount'] = $this->policyCount;
        }
        if (null !== $this->ruleCount) {
            $res['RuleCount'] = $this->ruleCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return defenseScenes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefenseScene'])) {
            $model->defenseScene = $map['DefenseScene'];
        }
        if (isset($map['PolicyCount'])) {
            $model->policyCount = $map['PolicyCount'];
        }
        if (isset($map['RuleCount'])) {
            $model->ruleCount = $map['RuleCount'];
        }

        return $model;
    }
}
