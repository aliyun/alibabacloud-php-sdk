<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\SDK\IaCService\V20210806\Models\GetResourceExportTaskResponseBody\task;
use AlibabaCloud\Tea\Model;

class GetResourceExportTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var task
     */
    public $task;
    protected $_name = [
        'requestId' => 'requestId',
        'task'      => 'task',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->task) {
            $res['task'] = null !== $this->task ? $this->task->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResourceExportTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['task'])) {
            $model->task = task::fromMap($map['task']);
        }

        return $model;
    }
}
