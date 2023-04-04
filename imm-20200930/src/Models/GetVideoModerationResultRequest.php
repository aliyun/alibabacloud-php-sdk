<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetVideoModerationResultRequest extends Model
{
    /**
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @example VideoModeration-d0f0df1d-531d-4ab4-b353-e7f475******
     *
     * @var string
     */
    public $taskId;

    /**
     * @example VideoModeration
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
     * @return GetVideoModerationResultRequest
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
