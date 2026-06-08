<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GenerateTemplatePolicyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\GenerateTemplatePolicyResponseBody\policyFunctions\actionPolicyFunctions;

class policyFunctions extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var actionPolicyFunctions[]
     */
    public $actionPolicyFunctions;

    /**
     * @var string
     */
    public $requirementLevel;
    protected $_name = [
        'action' => 'Action',
        'actionPolicyFunctions' => 'ActionPolicyFunctions',
        'requirementLevel' => 'RequirementLevel',
    ];

    public function validate()
    {
        if (\is_array($this->actionPolicyFunctions)) {
            Model::validateArray($this->actionPolicyFunctions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->actionPolicyFunctions) {
            if (\is_array($this->actionPolicyFunctions)) {
                $res['ActionPolicyFunctions'] = [];
                $n1 = 0;
                foreach ($this->actionPolicyFunctions as $item1) {
                    $res['ActionPolicyFunctions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requirementLevel) {
            $res['RequirementLevel'] = $this->requirementLevel;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['ActionPolicyFunctions'])) {
            if (!empty($map['ActionPolicyFunctions'])) {
                $model->actionPolicyFunctions = [];
                $n1 = 0;
                foreach ($map['ActionPolicyFunctions'] as $item1) {
                    $model->actionPolicyFunctions[$n1] = actionPolicyFunctions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequirementLevel'])) {
            $model->requirementLevel = $map['RequirementLevel'];
        }

        return $model;
    }
}
