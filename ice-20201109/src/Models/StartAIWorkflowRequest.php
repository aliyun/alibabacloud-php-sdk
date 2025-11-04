<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class StartAIWorkflowRequest extends Model
{
    /**
     * @var string
     */
    public $dispatchTag;

    /**
     * @var string
     */
    public $inputs;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $workflowId;
    protected $_name = [
        'dispatchTag' => 'DispatchTag',
        'inputs' => 'Inputs',
        'userData' => 'UserData',
        'workflowId' => 'WorkflowId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dispatchTag) {
            $res['DispatchTag'] = $this->dispatchTag;
        }

        if (null !== $this->inputs) {
            $res['Inputs'] = $this->inputs;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
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
        if (isset($map['DispatchTag'])) {
            $model->dispatchTag = $map['DispatchTag'];
        }

        if (isset($map['Inputs'])) {
            $model->inputs = $map['Inputs'];
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
