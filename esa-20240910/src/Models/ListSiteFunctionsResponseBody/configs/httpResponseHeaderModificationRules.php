<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody\configs;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody\configs\httpResponseHeaderModificationRules\responseHeaderModification;
use AlibabaCloud\Tea\Model;

class httpResponseHeaderModificationRules extends Model
{
    /**
     * @var int
     */
    public $configId;

    /**
     * @var responseHeaderModification[]
     */
    public $responseHeaderModification;

    /**
     * @var string
     */
    public $rule;

    /**
     * @var string
     */
    public $ruleEnable;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $sequence;
    protected $_name = [
        'configId'                   => 'ConfigId',
        'responseHeaderModification' => 'ResponseHeaderModification',
        'rule'                       => 'Rule',
        'ruleEnable'                 => 'RuleEnable',
        'ruleName'                   => 'RuleName',
        'sequence'                   => 'Sequence',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
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
        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
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
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
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
        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }

        return $model;
    }
}
