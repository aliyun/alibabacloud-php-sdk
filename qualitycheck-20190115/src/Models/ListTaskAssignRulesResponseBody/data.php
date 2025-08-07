<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo;

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
        if (\is_array($this->taskAssignRuleInfo)) {
            Model::validateArray($this->taskAssignRuleInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->taskAssignRuleInfo) {
            if (\is_array($this->taskAssignRuleInfo)) {
                $res['TaskAssignRuleInfo'] = [];
                $n1 = 0;
                foreach ($this->taskAssignRuleInfo as $item1) {
                    $res['TaskAssignRuleInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TaskAssignRuleInfo'])) {
            if (!empty($map['TaskAssignRuleInfo'])) {
                $model->taskAssignRuleInfo = [];
                $n1 = 0;
                foreach ($map['TaskAssignRuleInfo'] as $item1) {
                    $model->taskAssignRuleInfo[$n1] = taskAssignRuleInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
