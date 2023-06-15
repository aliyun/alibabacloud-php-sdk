<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyReadonlyInstanceDelayReplicationTimeResponseBody extends Model
{
    /**
     * @description The ID of the read-only instance.
     *
     * @example rr-bpxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The latency at which data is replicated from the primary instance to the read-only instance. Unit: seconds.
     *
     * @example 100
     *
     * @var string
     */
    public $readSQLReplicationTime;

    /**
     * @description The ID of the request.
     *
     * @example BBB11B5A-7B37-493A-87E6-490BCB7BDF98
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the replication task.
     *
     * @example 241535739
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'DBInstanceId'           => 'DBInstanceId',
        'readSQLReplicationTime' => 'ReadSQLReplicationTime',
        'requestId'              => 'RequestId',
        'taskId'                 => 'TaskId',
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
        if (null !== $this->readSQLReplicationTime) {
            $res['ReadSQLReplicationTime'] = $this->readSQLReplicationTime;
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
     * @return ModifyReadonlyInstanceDelayReplicationTimeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['ReadSQLReplicationTime'])) {
            $model->readSQLReplicationTime = $map['ReadSQLReplicationTime'];
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
