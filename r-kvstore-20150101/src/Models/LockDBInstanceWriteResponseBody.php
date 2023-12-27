<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class LockDBInstanceWriteResponseBody extends Model
{
    /**
     * @description The instance ID.
     *
     * @example r-2ev03avw0r0552***
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @description The reason why write operations on the instance are locked.
     *
     * @example lock reason
     *
     * @var string
     */
    public $lockReason;

    /**
     * @description The request ID.
     *
     * @example 2BE6E619-A657-42E3-AD2D-18F8428A****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The task ID.
     *
     * @example 21986****
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'DBInstanceName' => 'DBInstanceName',
        'lockReason'     => 'LockReason',
        'requestId'      => 'RequestId',
        'taskId'         => 'TaskId',
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
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
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
     * @return LockDBInstanceWriteResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
