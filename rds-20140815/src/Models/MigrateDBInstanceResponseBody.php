<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class MigrateDBInstanceResponseBody extends Model
{
    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $migrationId;
    protected $_name = [
        'taskId'      => 'TaskId',
        'requestId'   => 'RequestId',
        'migrationId' => 'MigrationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->migrationId) {
            $res['MigrationId'] = $this->migrationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MigrateDBInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MigrationId'])) {
            $model->migrationId = $map['MigrationId'];
        }

        return $model;
    }
}
