<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class MigrateDBInstanceResponseBody extends Model
{
    /**
     * @description The serial number of the task in the migration task queue. When the serial number becomes 0, the system starts the migration.
     *
     * @example 224****
     *
     * @var int
     */
    public $migrationId;

    /**
     * @description The ID of the request.
     *
     * @example 498AE8CA-8C81-4A01-AF37-2B902014ED30
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the task.
     *
     * @example 10824****
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'migrationId' => 'MigrationId',
        'requestId'   => 'RequestId',
        'taskId'      => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->migrationId) {
            $res['MigrationId'] = $this->migrationId;
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
     * @return MigrateDBInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MigrationId'])) {
            $model->migrationId = $map['MigrationId'];
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
