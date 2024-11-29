<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionRequest;

use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionRequest\httpResponseHeaderModificationRules\responseHeaderModification;
use AlibabaCloud\Tea\Model;

class httpResponseHeaderModificationRules extends Model
{
    /**
     * @description Modifies a response header. You can add, delete, or modify a request header.
     *
     * @example [{"operation":"add","name":"header_example_add","value":"value_exapme_add"},{"operation":"del","name":"header_example_delete","value":"value_exapme_delete"},{"operation":"modify","name":"header_example_update","value":"value_exapme_example"}]
     *
     * @var responseHeaderModification[]
     */
    public $responseHeaderModification;

    /**
     * @description The rule content.
     *
     * @example [{"MatchType":"http.request.method","MatchOperator":"eq","MatchValue":"GET","Negate":false}]
     *
     * @var string
     */
    public $rule;

    /**
     * @description Specifies whether to enable the rule. Valid values:
     *
     *   on
     *   off
     *
     * @example on
     *
     * @var string
     */
    public $ruleEnable;

    /**
     * @description The rule name.
     *
     * @example rule_example
     *
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'responseHeaderModification' => 'ResponseHeaderModification',
        'rule'                       => 'Rule',
        'ruleEnable'                 => 'RuleEnable',
        'ruleName'                   => 'RuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->responseHeaderModification) {
            $res['ResponseHeaderModification'] = [];
            if (null !== $this->responseHeaderModification && \is_array($this->responseHeaderModification)) {
                $n = 0;
                foreach ($this->responseHeaderModification as $item) {
                    $res['ResponseHeaderModification'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
        }
        if (null !== $this->ruleEnable) {
            $res['RuleEnable'] = $this->ruleEnable;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return httpResponseHeaderModificationRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResponseHeaderModification'])) {
            if (!empty($map['ResponseHeaderModification'])) {
                $model->responseHeaderModification = [];
                $n                                 = 0;
                foreach ($map['ResponseHeaderModification'] as $item) {
                    $model->responseHeaderModification[$n++] = null !== $item ? responseHeaderModification::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }
        if (isset($map['RuleEnable'])) {
            $model->ruleEnable = $map['RuleEnable'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
