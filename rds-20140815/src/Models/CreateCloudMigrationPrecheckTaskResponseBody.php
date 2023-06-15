<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateCloudMigrationPrecheckTaskResponseBody extends Model
{
    /**
     * @description The name of the instance.
     *
     * @example pgm-bp102g323jd4****
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @description The ID of the request.
     *
     * @example 60F9A12A-16B8-4728-B099-4CA38D32C31C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the task.
     *
     * @example 439946016
     *
     * @var int
     */
    public $taskId;

    /**
     * @description The name of the task.
     *
     * @example slf7w7wj3g
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'DBInstanceName' => 'DBInstanceName',
        'requestId'      => 'RequestId',
        'taskId'         => 'TaskId',
        'taskName'       => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCloudMigrationPrecheckTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
