<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\UpdateApplicationCustomRulesRequest;

use AlibabaCloud\Dara\Model;

class rules extends Model
{
    /**
     * @var int[]
     */
    public $addApplicationIds;

    /**
     * @var string
     */
    public $applicationCustomRuleId;

    /**
     * @var string
     */
    public $applicationCustomRuleName;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var int[]
     */
    public $removeApplicationIds;

    /**
     * @var string
     */
    public $ruleAction;
    protected $_name = [
        'addApplicationIds' => 'AddApplicationIds',
        'applicationCustomRuleId' => 'ApplicationCustomRuleId',
        'applicationCustomRuleName' => 'ApplicationCustomRuleName',
        'priority' => 'Priority',
        'removeApplicationIds' => 'RemoveApplicationIds',
        'ruleAction' => 'RuleAction',
    ];

    public function validate()
    {
        if (\is_array($this->addApplicationIds)) {
            Model::validateArray($this->addApplicationIds);
        }
        if (\is_array($this->removeApplicationIds)) {
            Model::validateArray($this->removeApplicationIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addApplicationIds) {
            if (\is_array($this->addApplicationIds)) {
                $res['AddApplicationIds'] = [];
                $n1 = 0;
                foreach ($this->addApplicationIds as $item1) {
                    $res['AddApplicationIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->applicationCustomRuleId) {
            $res['ApplicationCustomRuleId'] = $this->applicationCustomRuleId;
        }

        if (null !== $this->applicationCustomRuleName) {
            $res['ApplicationCustomRuleName'] = $this->applicationCustomRuleName;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->removeApplicationIds) {
            if (\is_array($this->removeApplicationIds)) {
                $res['RemoveApplicationIds'] = [];
                $n1 = 0;
                foreach ($this->removeApplicationIds as $item1) {
                    $res['RemoveApplicationIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AddApplicationIds'])) {
            if (!empty($map['AddApplicationIds'])) {
                $model->addApplicationIds = [];
                $n1 = 0;
                foreach ($map['AddApplicationIds'] as $item1) {
                    $model->addApplicationIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ApplicationCustomRuleId'])) {
            $model->applicationCustomRuleId = $map['ApplicationCustomRuleId'];
        }

        if (isset($map['ApplicationCustomRuleName'])) {
            $model->applicationCustomRuleName = $map['ApplicationCustomRuleName'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['RemoveApplicationIds'])) {
            if (!empty($map['RemoveApplicationIds'])) {
                $model->removeApplicationIds = [];
                $n1 = 0;
                foreach ($map['RemoveApplicationIds'] as $item1) {
                    $model->removeApplicationIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RuleAction'])) {
            $model->ruleAction = $map['RuleAction'];
        }

        return $model;
    }
}
