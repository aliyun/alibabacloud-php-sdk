<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateCloudMigrationTaskResponseBody extends Model
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
     * @example 8B993DA9-5272-5414-94E3-4CA8BA0146C2
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the task.
     *
     * @example 440437220
     *
     * @var int
     */
    public $taskId;

    /**
     * @description The name of the task.
     *
     * @example 362c6c7a-4d20-4eac-898c-1495ceab374c
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
     * @return CreateCloudMigrationTaskResponseBody
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
