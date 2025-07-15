<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class StopLivePullToPushResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example a05e6b15-15af-405b-a4a2-0152245d****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The new task ID.
     *
     * @example fb0d4ac7-c7e3-4978-9743-0bf2f6e8****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'requestId' => 'RequestId',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopLivePullToPushResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
