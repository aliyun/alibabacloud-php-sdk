<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\ListApplicationCustomRulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ListApplicationCustomRulesResponseBody\applicationCustomRules\applications;

class applicationCustomRules extends Model
{
    /**
     * @var string
     */
    public $applicationCustomRuleId;

    /**
     * @var string
     */
    public $applicationCustomRuleName;

    /**
     * @var string
     */
    public $applicationTemplateId;

    /**
     * @var applications[]
     */
    public $applications;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $ruleAction;
    protected $_name = [
        'applicationCustomRuleId' => 'ApplicationCustomRuleId',
        'applicationCustomRuleName' => 'ApplicationCustomRuleName',
        'applicationTemplateId' => 'ApplicationTemplateId',
        'applications' => 'Applications',
        'priority' => 'Priority',
        'ruleAction' => 'RuleAction',
    ];

    public function validate()
    {
        if (\is_array($this->applications)) {
            Model::validateArray($this->applications);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationCustomRuleId) {
            $res['ApplicationCustomRuleId'] = $this->applicationCustomRuleId;
        }

        if (null !== $this->applicationCustomRuleName) {
            $res['ApplicationCustomRuleName'] = $this->applicationCustomRuleName;
        }

        if (null !== $this->applicationTemplateId) {
            $res['ApplicationTemplateId'] = $this->applicationTemplateId;
        }

        if (null !== $this->applications) {
            if (\is_array($this->applications)) {
                $res['Applications'] = [];
                $n1 = 0;
                foreach ($this->applications as $item1) {
                    $res['Applications'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ApplicationCustomRuleId'])) {
            $model->applicationCustomRuleId = $map['ApplicationCustomRuleId'];
        }

        if (isset($map['ApplicationCustomRuleName'])) {
            $model->applicationCustomRuleName = $map['ApplicationCustomRuleName'];
        }

        if (isset($map['ApplicationTemplateId'])) {
            $model->applicationTemplateId = $map['ApplicationTemplateId'];
        }

        if (isset($map['Applications'])) {
            if (!empty($map['Applications'])) {
                $model->applications = [];
                $n1 = 0;
                foreach ($map['Applications'] as $item1) {
                    $model->applications[$n1] = applications::fromMap($item1);
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
