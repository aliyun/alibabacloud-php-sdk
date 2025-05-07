<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSkillGroupConfigResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSkillGroupConfigResponseBody\data\allRuleList\ruleNameInfo;

class allRuleList extends Model
{
    /**
     * @var ruleNameInfo[]
     */
    public $ruleNameInfo;
    protected $_name = [
        'ruleNameInfo' => 'RuleNameInfo',
    ];

    public function validate()
    {
        if (\is_array($this->ruleNameInfo)) {
            Model::validateArray($this->ruleNameInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ruleNameInfo) {
            if (\is_array($this->ruleNameInfo)) {
                $res['RuleNameInfo'] = [];
                $n1 = 0;
                foreach ($this->ruleNameInfo as $item1) {
                    $res['RuleNameInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RuleNameInfo'])) {
            if (!empty($map['RuleNameInfo'])) {
                $model->ruleNameInfo = [];
                $n1 = 0;
                foreach ($map['RuleNameInfo'] as $item1) {
                    $model->ruleNameInfo[$n1++] = ruleNameInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
