<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateWorkflowRequest\tasks;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateWorkflowRequest\tasks\outputs\taskOutputs;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateWorkflowRequest\tasks\outputs\variables;
use AlibabaCloud\Tea\Model;

class outputs extends Model
{
    /**
     * @description The task outputs.
     *
     * @var taskOutputs[]
     */
    public $taskOutputs;

    /**
     * @description The variables.
     *
     * @var variables[]
     */
    public $variables;
    protected $_name = [
        'taskOutputs' => 'TaskOutputs',
        'variables' => 'Variables',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskOutputs) {
            $res['TaskOutputs'] = [];
            if (null !== $this->taskOutputs && \is_array($this->taskOutputs)) {
                $n = 0;
                foreach ($this->taskOutputs as $item) {
                    $res['TaskOutputs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->variables) {
            $res['Variables'] = [];
            if (null !== $this->variables && \is_array($this->variables)) {
                $n = 0;
                foreach ($this->variables as $item) {
                    $res['Variables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outputs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskOutputs'])) {
            if (!empty($map['TaskOutputs'])) {
                $model->taskOutputs = [];
                $n = 0;
                foreach ($map['TaskOutputs'] as $item) {
                    $model->taskOutputs[$n++] = null !== $item ? taskOutputs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Variables'])) {
            if (!empty($map['Variables'])) {
                $model->variables = [];
                $n = 0;
                foreach ($map['Variables'] as $item) {
                    $model->variables[$n++] = null !== $item ? variables::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
