<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetBuildRiskDefineRuleConfigResponseBody\data;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetBuildRiskDefineRuleConfigResponseBody\data\ruleTree\ruleList;
use AlibabaCloud\Tea\Model;

class ruleTree extends Model
{
    /**
     * @description The check item type.
     *
     * @example other
     *
     * @var string
     */
    public $classKey;

    /**
     * @description The name of the check item type.
     *
     * @example other
     *
     * @var string
     */
    public $className;

    /**
     * @description The check items of the type.
     *
     * @var ruleList[]
     */
    public $ruleList;
    protected $_name = [
        'classKey' => 'ClassKey',
        'className' => 'ClassName',
        'ruleList' => 'RuleList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->classKey) {
            $res['ClassKey'] = $this->classKey;
        }
        if (null !== $this->className) {
            $res['ClassName'] = $this->className;
        }
        if (null !== $this->ruleList) {
            $res['RuleList'] = [];
            if (null !== $this->ruleList && \is_array($this->ruleList)) {
                $n = 0;
                foreach ($this->ruleList as $item) {
                    $res['RuleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleTree
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClassKey'])) {
            $model->classKey = $map['ClassKey'];
        }
        if (isset($map['ClassName'])) {
            $model->className = $map['ClassName'];
        }
        if (isset($map['RuleList'])) {
            if (!empty($map['RuleList'])) {
                $model->ruleList = [];
                $n = 0;
                foreach ($map['RuleList'] as $item) {
                    $model->ruleList[$n++] = null !== $item ? ruleList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
