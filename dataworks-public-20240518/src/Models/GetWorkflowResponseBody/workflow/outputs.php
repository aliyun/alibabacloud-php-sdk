<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetWorkflowResponseBody\workflow;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetWorkflowResponseBody\workflow\outputs\taskOutputs;

class outputs extends Model
{
    /**
     * @var taskOutputs[]
     */
    public $taskOutputs;
    protected $_name = [
        'taskOutputs' => 'TaskOutputs',
    ];

    public function validate()
    {
        if (\is_array($this->taskOutputs)) {
            Model::validateArray($this->taskOutputs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->taskOutputs) {
            if (\is_array($this->taskOutputs)) {
                $res['TaskOutputs'] = [];
                $n1 = 0;
                foreach ($this->taskOutputs as $item1) {
                    $res['TaskOutputs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TaskOutputs'])) {
            if (!empty($map['TaskOutputs'])) {
                $model->taskOutputs = [];
                $n1 = 0;
                foreach ($map['TaskOutputs'] as $item1) {
                    $model->taskOutputs[$n1] = taskOutputs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
