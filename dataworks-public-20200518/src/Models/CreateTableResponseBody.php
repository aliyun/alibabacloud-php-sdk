<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateTableResponseBody\taskInfo;
use AlibabaCloud\Tea\Model;

class CreateTableResponseBody extends Model
{
    /**
     * @description The information about the request task.
     *
     * If a request task is aborted due to one of the following issues, address the issue based on the error code and initiate the request task again:
     *
     *   The request task fails to be submitted.
     *   After the request task is submitted, a subtask fails to run.
     *
     * @example abcdef
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the current subtask. Valid values:
     *
     *   operating: The subtask is running.
     *   success: The subtask succeeds.
     *   failure: The subtask fails to run. For more information about the error details, see the Content parameter.
     *
     * @var taskInfo
     */
    public $taskInfo;
    protected $_name = [
        'requestId' => 'RequestId',
        'taskInfo'  => 'TaskInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskInfo) {
            $res['TaskInfo'] = null !== $this->taskInfo ? $this->taskInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTableResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskInfo'])) {
            $model->taskInfo = taskInfo::fromMap($map['TaskInfo']);
        }

        return $model;
    }
}
