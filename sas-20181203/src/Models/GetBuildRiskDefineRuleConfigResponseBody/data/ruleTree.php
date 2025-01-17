<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetBuildRiskDefineRuleConfigResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetBuildRiskDefineRuleConfigResponseBody\data\ruleTree\ruleList;

class ruleTree extends Model
{
    /**
     * @var string
     */
    public $classKey;
    /**
     * @var string
     */
    public $className;
    /**
     * @var ruleList[]
     */
    public $ruleList;
    protected $_name = [
        'classKey'  => 'ClassKey',
        'className' => 'ClassName',
        'ruleList'  => 'RuleList',
    ];

    public function validate()
    {
        if (\is_array($this->ruleList)) {
            Model::validateArray($this->ruleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->classKey) {
            $res['ClassKey'] = $this->classKey;
        }

        if (null !== $this->className) {
            $res['ClassName'] = $this->className;
        }

        if (null !== $this->ruleList) {
            if (\is_array($this->ruleList)) {
                $res['RuleList'] = [];
                $n1              = 0;
                foreach ($this->ruleList as $item1) {
                    $res['RuleList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1              = 0;
                foreach ($map['RuleList'] as $item1) {
                    $model->ruleList[$n1++] = ruleList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
