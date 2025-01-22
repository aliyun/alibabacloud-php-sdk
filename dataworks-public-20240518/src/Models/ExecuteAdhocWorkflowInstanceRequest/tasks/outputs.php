<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ExecuteAdhocWorkflowInstanceRequest\tasks;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ExecuteAdhocWorkflowInstanceRequest\tasks\outputs\taskOutputs;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ExecuteAdhocWorkflowInstanceRequest\tasks\outputs\variables;

class outputs extends Model
{
    /**
     * @var taskOutputs[]
     */
    public $taskOutputs;
    /**
     * @var variables[]
     */
    public $variables;
    protected $_name = [
        'taskOutputs' => 'TaskOutputs',
        'variables'   => 'Variables',
    ];

    public function validate()
    {
        if (\is_array($this->taskOutputs)) {
            Model::validateArray($this->taskOutputs);
        }
        if (\is_array($this->variables)) {
            Model::validateArray($this->variables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->taskOutputs) {
            if (\is_array($this->taskOutputs)) {
                $res['TaskOutputs'] = [];
                $n1                 = 0;
                foreach ($this->taskOutputs as $item1) {
                    $res['TaskOutputs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->variables) {
            if (\is_array($this->variables)) {
                $res['Variables'] = [];
                $n1               = 0;
                foreach ($this->variables as $item1) {
                    $res['Variables'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TaskOutputs'])) {
            if (!empty($map['TaskOutputs'])) {
                $model->taskOutputs = [];
                $n1                 = 0;
                foreach ($map['TaskOutputs'] as $item1) {
                    $model->taskOutputs[$n1++] = taskOutputs::fromMap($item1);
                }
            }
        }

        if (isset($map['Variables'])) {
            if (!empty($map['Variables'])) {
                $model->variables = [];
                $n1               = 0;
                foreach ($map['Variables'] as $item1) {
                    $model->variables[$n1++] = variables::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
