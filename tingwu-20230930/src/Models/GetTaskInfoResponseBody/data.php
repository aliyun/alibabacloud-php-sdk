<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models\GetTaskInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example c5394c6ee0fb474899d42215a3925c7e
     *
     * @var string
     */
    public $taskId;

    /**
     * @example task_tingwu_123
     *
     * @var string
     */
    public $taskKey;

    /**
     * @example COMPLETE
     *
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'taskId'     => 'TaskId',
        'taskKey'    => 'TaskKey',
        'taskStatus' => 'TaskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskKey) {
            $res['TaskKey'] = $this->taskKey;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskKey'])) {
            $model->taskKey = $map['TaskKey'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
