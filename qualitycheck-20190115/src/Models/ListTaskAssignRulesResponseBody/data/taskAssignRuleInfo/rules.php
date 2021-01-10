<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo\rules\ruleBasicInfo;
use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @var ruleBasicInfo[]
     */
    public $ruleBasicInfo;
    protected $_name = [
        'ruleBasicInfo' => 'RuleBasicInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleBasicInfo) {
            $res['RuleBasicInfo'] = [];
            if (null !== $this->ruleBasicInfo && \is_array($this->ruleBasicInfo)) {
                $n = 0;
                foreach ($this->ruleBasicInfo as $item) {
                    $res['RuleBasicInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['RuleBasicInfo'])) {
            if (!empty($map['RuleBasicInfo'])) {
                $model->ruleBasicInfo = [];
                $n                    = 0;
                foreach ($map['RuleBasicInfo'] as $item) {
                    $model->ruleBasicInfo[$n++] = null !== $item ? ruleBasicInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
