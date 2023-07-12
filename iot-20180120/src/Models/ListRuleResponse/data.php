<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListRuleResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\ListRuleResponse\data\ruleInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
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
        Model::validateRequired('ruleInfo', $this->ruleInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleInfo) {
            $res['RuleInfo'] = [];
            if (null !== $this->ruleInfo && \is_array($this->ruleInfo)) {
                $n = 0;
                foreach ($this->ruleInfo as $item) {
                    $res['RuleInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleInfo'])) {
            if (!empty($map['RuleInfo'])) {
                $model->ruleInfo = [];
                $n               = 0;
                foreach ($map['RuleInfo'] as $item) {
                    $model->ruleInfo[$n++] = null !== $item ? ruleInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
