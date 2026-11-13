<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateApplicationCustomRulesRequest;

use AlibabaCloud\Dara\Model;

class rules extends Model
{
    /**
     * @var string
     */
    public $applicationCustomRuleName;

    /**
     * @var int[]
     */
    public $applicationIds;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $ruleAction;
    protected $_name = [
        'applicationCustomRuleName' => 'ApplicationCustomRuleName',
        'applicationIds' => 'ApplicationIds',
        'priority' => 'Priority',
        'ruleAction' => 'RuleAction',
    ];

    public function validate()
    {
        if (\is_array($this->applicationIds)) {
            Model::validateArray($this->applicationIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationCustomRuleName) {
            $res['ApplicationCustomRuleName'] = $this->applicationCustomRuleName;
        }

        if (null !== $this->applicationIds) {
            if (\is_array($this->applicationIds)) {
                $res['ApplicationIds'] = [];
                $n1 = 0;
                foreach ($this->applicationIds as $item1) {
                    $res['ApplicationIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->ruleAction) {
            $res['RuleAction'] = $this->ruleAction;
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
        if (isset($map['ApplicationCustomRuleName'])) {
            $model->applicationCustomRuleName = $map['ApplicationCustomRuleName'];
        }

        if (isset($map['ApplicationIds'])) {
            if (!empty($map['ApplicationIds'])) {
                $model->applicationIds = [];
                $n1 = 0;
                foreach ($map['ApplicationIds'] as $item1) {
                    $model->applicationIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['RuleAction'])) {
            $model->ruleAction = $map['RuleAction'];
        }

        return $model;
    }
}
