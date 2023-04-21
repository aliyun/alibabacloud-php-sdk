<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeScanTaskProgressResponseBody extends Model
{
    /**
     * @description The time when the task was created.
     *
     * @example 2021-05-18T02:40:24Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the request.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the task. Valid values:
     *
     *   init: The task is being initialized.
     *   Processing: The task is in progress.
     *   Success: The task is completed.
     *   Failed: The task failed.
     *
     * @example Success
     *
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'createTime' => 'CreateTime',
        'requestId'  => 'RequestId',
        'taskStatus' => 'TaskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScanTaskProgressResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
