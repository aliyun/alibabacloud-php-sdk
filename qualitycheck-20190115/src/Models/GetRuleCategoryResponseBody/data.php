<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleCategoryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleCategoryResponseBody\data\ruleCountInfo;

class data extends Model
{
    /**
     * @var ruleCountInfo[]
     */
    public $ruleCountInfo;
    protected $_name = [
        'ruleCountInfo' => 'RuleCountInfo',
    ];

    public function validate()
    {
        if (\is_array($this->ruleCountInfo)) {
            Model::validateArray($this->ruleCountInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ruleCountInfo) {
            if (\is_array($this->ruleCountInfo)) {
                $res['RuleCountInfo'] = [];
                $n1 = 0;
                foreach ($this->ruleCountInfo as $item1) {
                    $res['RuleCountInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RuleCountInfo'])) {
            if (!empty($map['RuleCountInfo'])) {
                $model->ruleCountInfo = [];
                $n1 = 0;
                foreach ($map['RuleCountInfo'] as $item1) {
                    $model->ruleCountInfo[$n1] = ruleCountInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
