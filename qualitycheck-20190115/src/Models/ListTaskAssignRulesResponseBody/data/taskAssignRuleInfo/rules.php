<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo\rules\ruleBasicInfo;

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
        if (\is_array($this->ruleBasicInfo)) {
            Model::validateArray($this->ruleBasicInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ruleBasicInfo) {
            if (\is_array($this->ruleBasicInfo)) {
                $res['RuleBasicInfo'] = [];
                $n1 = 0;
                foreach ($this->ruleBasicInfo as $item1) {
                    $res['RuleBasicInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RuleBasicInfo'])) {
            if (!empty($map['RuleBasicInfo'])) {
                $model->ruleBasicInfo = [];
                $n1 = 0;
                foreach ($map['RuleBasicInfo'] as $item1) {
                    $model->ruleBasicInfo[$n1++] = ruleBasicInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
