<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var taskAssignRuleInfo[]
     */
    public $taskAssignRuleInfo;
    protected $_name = [
        'taskAssignRuleInfo' => 'TaskAssignRuleInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskAssignRuleInfo) {
            $res['TaskAssignRuleInfo'] = [];
            if (null !== $this->taskAssignRuleInfo && \is_array($this->taskAssignRuleInfo)) {
                $n = 0;
                foreach ($this->taskAssignRuleInfo as $item) {
                    $res['TaskAssignRuleInfo'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['TaskAssignRuleInfo'])) {
            if (!empty($map['TaskAssignRuleInfo'])) {
                $model->taskAssignRuleInfo = [];
                $n                         = 0;
                foreach ($map['TaskAssignRuleInfo'] as $item) {
                    $model->taskAssignRuleInfo[$n++] = null !== $item ? taskAssignRuleInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
