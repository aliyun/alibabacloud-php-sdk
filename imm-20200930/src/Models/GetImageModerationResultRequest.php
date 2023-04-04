<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetImageModerationResultRequest extends Model
{
    /**
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @example ImageModeration-ff207203-3f93-4645-a041-7b8f0f******
     *
     * @var string
     */
    public $taskId;

    /**
     * @example ImageModeration
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'projectName' => 'ProjectName',
        'taskId'      => 'TaskId',
        'taskType'    => 'TaskType',
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
     * @return GetImageModerationResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
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
