<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\TypedAIAsset;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\TypedAIAsset\recognitionEvidence\agentDeclaration;
use AlibabaCloud\SDK\Csas\V20230120\Models\TypedAIAsset\recognitionEvidence\autonomousExecution;
use AlibabaCloud\SDK\Csas\V20230120\Models\TypedAIAsset\recognitionEvidence\modelCall;
use AlibabaCloud\SDK\Csas\V20230120\Models\TypedAIAsset\recognitionEvidence\stateManagement;
use AlibabaCloud\SDK\Csas\V20230120\Models\TypedAIAsset\recognitionEvidence\toolCall;

class recognitionEvidence extends Model
{
    /**
     * @var agentDeclaration[]
     */
    public $agentDeclaration;

    /**
     * @var autonomousExecution[]
     */
    public $autonomousExecution;

    /**
     * @var modelCall[]
     */
    public $modelCall;

    /**
     * @var stateManagement[]
     */
    public $stateManagement;

    /**
     * @var toolCall[]
     */
    public $toolCall;
    protected $_name = [
        'agentDeclaration' => 'agent_declaration',
        'autonomousExecution' => 'autonomous_execution',
        'modelCall' => 'model_call',
        'stateManagement' => 'state_management',
        'toolCall' => 'tool_call',
    ];

    public function validate()
    {
        if (\is_array($this->agentDeclaration)) {
            Model::validateArray($this->agentDeclaration);
        }
        if (\is_array($this->autonomousExecution)) {
            Model::validateArray($this->autonomousExecution);
        }
        if (\is_array($this->modelCall)) {
            Model::validateArray($this->modelCall);
        }
        if (\is_array($this->stateManagement)) {
            Model::validateArray($this->stateManagement);
        }
        if (\is_array($this->toolCall)) {
            Model::validateArray($this->toolCall);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentDeclaration) {
            if (\is_array($this->agentDeclaration)) {
                $res['agent_declaration'] = [];
                $n1 = 0;
                foreach ($this->agentDeclaration as $item1) {
                    $res['agent_declaration'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->autonomousExecution) {
            if (\is_array($this->autonomousExecution)) {
                $res['autonomous_execution'] = [];
                $n1 = 0;
                foreach ($this->autonomousExecution as $item1) {
                    $res['autonomous_execution'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modelCall) {
            if (\is_array($this->modelCall)) {
                $res['model_call'] = [];
                $n1 = 0;
                foreach ($this->modelCall as $item1) {
                    $res['model_call'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->stateManagement) {
            if (\is_array($this->stateManagement)) {
                $res['state_management'] = [];
                $n1 = 0;
                foreach ($this->stateManagement as $item1) {
                    $res['state_management'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->toolCall) {
            if (\is_array($this->toolCall)) {
                $res['tool_call'] = [];
                $n1 = 0;
                foreach ($this->toolCall as $item1) {
                    $res['tool_call'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['agent_declaration'])) {
            if (!empty($map['agent_declaration'])) {
                $model->agentDeclaration = [];
                $n1 = 0;
                foreach ($map['agent_declaration'] as $item1) {
                    $model->agentDeclaration[$n1] = agentDeclaration::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['autonomous_execution'])) {
            if (!empty($map['autonomous_execution'])) {
                $model->autonomousExecution = [];
                $n1 = 0;
                foreach ($map['autonomous_execution'] as $item1) {
                    $model->autonomousExecution[$n1] = autonomousExecution::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['model_call'])) {
            if (!empty($map['model_call'])) {
                $model->modelCall = [];
                $n1 = 0;
                foreach ($map['model_call'] as $item1) {
                    $model->modelCall[$n1] = modelCall::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['state_management'])) {
            if (!empty($map['state_management'])) {
                $model->stateManagement = [];
                $n1 = 0;
                foreach ($map['state_management'] as $item1) {
                    $model->stateManagement[$n1] = stateManagement::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['tool_call'])) {
            if (!empty($map['tool_call'])) {
                $model->toolCall = [];
                $n1 = 0;
                foreach ($map['tool_call'] as $item1) {
                    $model->toolCall[$n1] = toolCall::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
