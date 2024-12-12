<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class StartWorkflowRequest extends Model
{
    /**
     * @description The workflow input. Only media assets are supported.
     *
     * @example {
     * "Type": "Media",
     * "Media": "******30706071edbfe290b488******"
     * }
     * @var string
     */
    public $taskInput;

    /**
     * @description The user-defined data in the JSON format, which cannot be up to 512 bytes in length. You can specify a custom callback URL. For more information, see [Configure a callback upon editing completion](https://help.aliyun.com/document_detail/451631.html).
     *
     * @var string
     */
    public $userData;

    /**
     * @description The ID of the workflow template. To view the template ID, log on to the [IMS console](https://ims.console.aliyun.com/settings/workflow/list) and choose Configurations > Workflow Template.
     *
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
