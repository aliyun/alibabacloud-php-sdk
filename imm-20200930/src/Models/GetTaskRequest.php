<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetTaskRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example immtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @var bool
     */
    public $requestDefinition;

    /**
     * @description This parameter is required.
     *
     * @example c2b277b9-0d30-4882-ad6d-ad661382****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description This parameter is required.
     *
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
