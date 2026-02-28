<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListRuleActionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListRuleActionsResponseBody\ruleActionList\ruleActionInfo;

class ruleActionList extends Model
{
    /**
     * @var ruleActionInfo[]
     */
    public $ruleActionInfo;
    protected $_name = [
        'ruleActionInfo' => 'RuleActionInfo',
    ];

    public function validate()
    {
        if (\is_array($this->ruleActionInfo)) {
            Model::validateArray($this->ruleActionInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ruleActionInfo) {
            if (\is_array($this->ruleActionInfo)) {
                $res['RuleActionInfo'] = [];
                $n1 = 0;
                foreach ($this->ruleActionInfo as $item1) {
                    $res['RuleActionInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['RuleActionInfo'])) {
            if (!empty($map['RuleActionInfo'])) {
                $model->ruleActionInfo = [];
                $n1 = 0;
                foreach ($map['RuleActionInfo'] as $item1) {
                    $model->ruleActionInfo[$n1] = ruleActionInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
