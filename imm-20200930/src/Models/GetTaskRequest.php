<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetTaskRequest extends Model
{
    /**
     * @description The name of the project. You can obtain the name of the project from the response of the [CreateProject](https://help.aliyun.com/document_detail/478153.html) operation.
     *
     * This parameter is required.
     * @example immtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @description Specifies whether to return the initial request parameters that are used to create the task. Default value: False.
     *
     * @example True
     *
     * @var bool
     */
    public $requestDefinition;

    /**
     * @description The ID of the task. You can obtain the ID of a task after you create the task.
     *
     * This parameter is required.
     * @example c2b277b9-0d30-4882-ad6d-ad661382****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The type of the task. For information about valid values, see [Task types](https://help.aliyun.com/document_detail/2743993.html).
     *
     * This parameter is required.
     * @example VideoLabelClassification
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'projectName'       => 'ProjectName',
        'requestDefinition' => 'RequestDefinition',
        'taskId'            => 'TaskId',
        'taskType'          => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->requestDefinition) {
            $res['RequestDefinition'] = $this->requestDefinition;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['RequestDefinition'])) {
            $model->requestDefinition = $map['RequestDefinition'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
