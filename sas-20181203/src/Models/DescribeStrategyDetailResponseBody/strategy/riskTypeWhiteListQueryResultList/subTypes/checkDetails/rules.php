<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyDetailResponseBody\strategy\riskTypeWhiteListQueryResultList\subTypes\checkDetails;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyDetailResponseBody\strategy\riskTypeWhiteListQueryResultList\subTypes\checkDetails\rules\paramList;
use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @description The default value of the rule.
     *
     * @example 2
     *
     * @var int
     */
    public $defaultValue;

    /**
     * @description Indicates whether the rule can be selected. Valid values:
     *
     *   **1**: The rule can be selected.
     *   **0**: The rule cannot be selected.
     *
     * @example 1
     *
     * @var int
     */
    public $optional;

    /**
     * @description The rule parameters.
     *
     * @var paramList[]
     */
    public $paramList;

    /**
     * @description The description of the rule.
     *
     * @example Please customize the password expiration time detection standard as
     *
     * @var string
     */
    public $ruleDesc;

    /**
     * @description The rule ID.
     *
     * @example login_unlock_deny_pam_faillock.must.cus
     *
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'defaultValue' => 'DefaultValue',
        'optional'     => 'Optional',
        'paramList'    => 'ParamList',
        'ruleDesc'     => 'RuleDesc',
        'ruleId'       => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->optional) {
            $res['Optional'] = $this->optional;
        }
        if (null !== $this->paramList) {
            $res['ParamList'] = [];
            if (null !== $this->paramList && \is_array($this->paramList)) {
                $n = 0;
                foreach ($this->paramList as $item) {
                    $res['ParamList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ruleDesc) {
            $res['RuleDesc'] = $this->ruleDesc;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['Optional'])) {
            $model->optional = $map['Optional'];
        }
        if (isset($map['ParamList'])) {
            if (!empty($map['ParamList'])) {
                $model->paramList = [];
                $n                = 0;
                foreach ($map['ParamList'] as $item) {
                    $model->paramList[$n++] = null !== $item ? paramList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RuleDesc'])) {
            $model->ruleDesc = $map['RuleDesc'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
