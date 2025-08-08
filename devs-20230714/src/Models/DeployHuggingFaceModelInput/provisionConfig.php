<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\DeployHuggingFaceModelInput;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devs\V20230714\Models\DeployHuggingFaceModelInput\provisionConfig\scheduledActions;

class provisionConfig extends Model
{
    /**
     * @var bool
     */
    public $alwaysAllocateGPU;

    /**
     * @var scheduledActions[]
     */
    public $scheduledActions;

    /**
     * @var int
     */
    public $target;
    protected $_name = [
        'alwaysAllocateGPU' => 'alwaysAllocateGPU',
        'scheduledActions' => 'scheduledActions',
        'target' => 'target',
    ];

    public function validate()
    {
        if (\is_array($this->scheduledActions)) {
            Model::validateArray($this->scheduledActions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alwaysAllocateGPU) {
            $res['alwaysAllocateGPU'] = $this->alwaysAllocateGPU;
        }

        if (null !== $this->scheduledActions) {
            if (\is_array($this->scheduledActions)) {
                $res['scheduledActions'] = [];
                $n1 = 0;
                foreach ($this->scheduledActions as $item1) {
                    $res['scheduledActions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->target) {
            $res['target'] = $this->target;
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
        if (isset($map['alwaysAllocateGPU'])) {
            $model->alwaysAllocateGPU = $map['alwaysAllocateGPU'];
        }

        if (isset($map['scheduledActions'])) {
            if (!empty($map['scheduledActions'])) {
                $model->scheduledActions = [];
                $n1 = 0;
                foreach ($map['scheduledActions'] as $item1) {
                    $model->scheduledActions[$n1] = scheduledActions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['target'])) {
            $model->target = $map['target'];
        }

        return $model;
    }
}
