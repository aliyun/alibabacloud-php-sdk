<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleResponseBody\data\rules\ruleInfo;

class rules extends Model
{
    /**
     * @var ruleInfo[]
     */
    public $ruleInfo;
    protected $_name = [
        'ruleInfo' => 'RuleInfo',
    ];

    public function validate()
    {
        if (\is_array($this->ruleInfo)) {
            Model::validateArray($this->ruleInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ruleInfo) {
            if (\is_array($this->ruleInfo)) {
                $res['RuleInfo'] = [];
                $n1 = 0;
                foreach ($this->ruleInfo as $item1) {
                    $res['RuleInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RuleInfo'])) {
            if (!empty($map['RuleInfo'])) {
                $model->ruleInfo = [];
                $n1 = 0;
                foreach ($map['RuleInfo'] as $item1) {
                    $model->ruleInfo[$n1++] = ruleInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
