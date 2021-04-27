<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListRuleActionsResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\ListRuleActionsResponseBody\ruleActionList\ruleActionInfo;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleActionInfo) {
            $res['RuleActionInfo'] = [];
            if (null !== $this->ruleActionInfo && \is_array($this->ruleActionInfo)) {
                $n = 0;
                foreach ($this->ruleActionInfo as $item) {
                    $res['RuleActionInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleActionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleActionInfo'])) {
            if (!empty($map['RuleActionInfo'])) {
                $model->ruleActionInfo = [];
                $n                     = 0;
                foreach ($map['RuleActionInfo'] as $item) {
                    $model->ruleActionInfo[$n++] = null !== $item ? ruleActionInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
