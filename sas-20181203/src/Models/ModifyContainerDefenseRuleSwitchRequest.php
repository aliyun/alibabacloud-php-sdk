<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyContainerDefenseRuleSwitchRequest extends Model
{
    /**
     * @var int[]
     */
    public $ruleIds;

    /**
     * @example 0
     *
     * @var int
     */
    public $ruleSwitch;
    protected $_name = [
        'ruleIds'    => 'RuleIds',
        'ruleSwitch' => 'RuleSwitch',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleIds) {
            $res['RuleIds'] = $this->ruleIds;
        }
        if (null !== $this->ruleSwitch) {
            $res['RuleSwitch'] = $this->ruleSwitch;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyContainerDefenseRuleSwitchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleIds'])) {
            if (!empty($map['RuleIds'])) {
                $model->ruleIds = $map['RuleIds'];
            }
        }
        if (isset($map['RuleSwitch'])) {
            $model->ruleSwitch = $map['RuleSwitch'];
        }

        return $model;
    }
}
