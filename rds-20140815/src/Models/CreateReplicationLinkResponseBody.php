<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateReplicationLinkResponseBody extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example pgm-****.pg.rds.aliyuncs.com
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The request ID.
     *
     * @example 9F8C06AD-3F37-57A0-ABBF-ABD7824F55CE
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the task.
     *
     * @example 564532302
     *
     * @var int
     */
    public $taskId;

    /**
     * @description The name of the task.
     *
     * @example test01
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'requestId'    => 'RequestId',
        'taskId'       => 'TaskId',
        'taskName'     => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
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
     * @return CreateReplicationLinkResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
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
