<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class MasterNodeShutDownFailOverResponseBody extends Model
{
    /**
     * @description The instance ID.
     *
     * @example r-bp1zxszhcgatnx****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The request ID.
     *
     * @example 12123216-4B00-4378-BE4B-08005BFC****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The task ID. For information about how to obtain the ID of a task, see [ListTasks](https://help.aliyun.com/document_detail/454662.html).
     *
     * @example 17566
     *
     * @var string
     */
    public $taskID;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'requestId'    => 'RequestId',
        'taskID'       => 'TaskID',
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
        if (null !== $this->taskID) {
            $res['TaskID'] = $this->taskID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MasterNodeShutDownFailOverResponseBody
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
        if (isset($map['TaskID'])) {
            $model->taskID = $map['TaskID'];
        }

        return $model;
    }
}
