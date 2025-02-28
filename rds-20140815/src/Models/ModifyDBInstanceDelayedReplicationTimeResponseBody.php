<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class ModifyDBInstanceDelayedReplicationTimeResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var string
     */
    public $readSQLReplicationTime;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
