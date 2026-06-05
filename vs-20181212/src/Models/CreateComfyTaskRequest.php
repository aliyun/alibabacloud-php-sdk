<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;

class CreateComfyTaskRequest extends Model
{
    /**
     * @var string
     */
    public $hiveId;

    /**
     * @var string
     */
    public $userParameters;

    /**
     * @var string
     */
    public $workflowId;
    protected $_name = [
        'hiveId' => 'HiveId',
        'userParameters' => 'UserParameters',
        'workflowId' => 'WorkflowId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hiveId) {
            $res['HiveId'] = $this->hiveId;
        }

        if (null !== $this->userParameters) {
            $res['UserParameters'] = $this->userParameters;
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
        if (isset($map['HiveId'])) {
            $model->hiveId = $map['HiveId'];
        }

        if (isset($map['UserParameters'])) {
            $model->userParameters = $map['UserParameters'];
        }

        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }

        return $model;
    }
}
