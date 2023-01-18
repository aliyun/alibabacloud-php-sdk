<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class StartWorkflowRequest extends Model
{
    /**
     * @example {
     * "Type": "Media",
     * "Media": "******30706071edbfe290b488******"
     * }
     * @var string
     */
    public $taskInput;

    /**
     * @var string
     */
    public $userData;

    /**
     * @example ******f0e54971ecbffd472190******
     *
     * @var string
     */
    public $workflowId;
    protected $_name = [
        'taskInput'  => 'TaskInput',
        'userData'   => 'UserData',
        'workflowId' => 'WorkflowId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskInput) {
            $res['TaskInput'] = $this->taskInput;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartWorkflowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskInput'])) {
            $model->taskInput = $map['TaskInput'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }

        return $model;
    }
}
