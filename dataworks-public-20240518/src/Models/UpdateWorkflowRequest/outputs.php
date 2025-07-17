<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateWorkflowRequest;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateWorkflowRequest\outputs\taskOutputs;
use AlibabaCloud\Tea\Model;

class outputs extends Model
{
    /**
     * @description The task outputs.
     *
     * @var taskOutputs[]
     */
    public $taskOutputs;
    protected $_name = [
        'taskOutputs' => 'TaskOutputs',
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

        return $model;
    }
}
