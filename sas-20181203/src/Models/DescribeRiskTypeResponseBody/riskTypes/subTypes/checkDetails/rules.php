<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskTypeResponseBody\riskTypes\subTypes\checkDetails;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskTypeResponseBody\riskTypes\subTypes\checkDetails\rules\paramList;
use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @description Indicates whether the baseline can be edited. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 1
     *
     * @var int
     */
    public $optional;

    /**
     * @description An array that consists of the parameters in the rule for the baseline.
     *
     * @var paramList[]
     */
    public $paramList;

    /**
     * @description The description of the rule for the baseline.
     *
     * @example Please customize the password expiration time detection standard as
     *
     * @var string
     */
    public $ruleDesc;

    /**
     * @description The ID of the rule for the baseline.
     *
     * @example audit.audit_policy.auditpolicychange.cus
     *
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'optional'  => 'Optional',
        'paramList' => 'ParamList',
        'ruleDesc'  => 'RuleDesc',
        'ruleId'    => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
