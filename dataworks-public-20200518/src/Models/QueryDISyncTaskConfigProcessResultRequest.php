<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class QueryDISyncTaskConfigProcessResultRequest extends Model
{
    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var int
     */
    public $asyncProcessId;
    protected $_name = [
        'projectId'      => 'ProjectId',
        'taskType'       => 'TaskType',
        'asyncProcessId' => 'AsyncProcessId',
    ];

    public function validate()
    {
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('taskType', $this->taskType, true);
        Model::validateRequired('asyncProcessId', $this->asyncProcessId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->asyncProcessId) {
            $res['AsyncProcessId'] = $this->asyncProcessId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDISyncTaskConfigProcessResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['AsyncProcessId'])) {
            $model->asyncProcessId = $map['AsyncProcessId'];
        }

        return $model;
    }
}
