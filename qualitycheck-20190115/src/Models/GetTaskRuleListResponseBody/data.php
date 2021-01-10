<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetTaskRuleListResponseBody;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetTaskRuleListResponseBody\data\ruleCountInfo;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleCountInfo) {
            $res['RuleCountInfo'] = [];
            if (null !== $this->ruleCountInfo && \is_array($this->ruleCountInfo)) {
                $n = 0;
                foreach ($this->ruleCountInfo as $item) {
                    $res['RuleCountInfo'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['RuleCountInfo'])) {
            if (!empty($map['RuleCountInfo'])) {
                $model->ruleCountInfo = [];
                $n                    = 0;
                foreach ($map['RuleCountInfo'] as $item) {
                    $model->ruleCountInfo[$n++] = null !== $item ? ruleCountInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
