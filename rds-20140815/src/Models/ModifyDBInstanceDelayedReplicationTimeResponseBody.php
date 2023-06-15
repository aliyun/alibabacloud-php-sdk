<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceDelayedReplicationTimeResponseBody extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example rm-uf6wjk5*****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The replication latency of the read-only instance. Unit: seconds.
     *
     * @example 100
     *
     * @var string
     */
    public $readSQLReplicationTime;

    /**
     * @description The ID of the request.
     *
     * @example EFB6083A-7699-489B-8278-C0CB4793A96E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the task.
     *
     * @example 1715482.0
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
     * @return ModifyDBInstanceDelayedReplicationTimeResponseBody
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
