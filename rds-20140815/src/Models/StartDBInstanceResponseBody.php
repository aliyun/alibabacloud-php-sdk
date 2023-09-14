<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class StartDBInstanceResponseBody extends Model
{
    /**
     * @description The migration task ID. This parameter is available only for instances that are created in dedicated clusters.
     *
     * @example 740
     *
     * @var int
     */
    public $migrationId;

    /**
     * @description The ID of the request.
     *
     * @example A417FB41-A3D9-464E-AD0A-C7FE05C72E98
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the task.
     *
     * @example 238028563
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
     * @return StartDBInstanceResponseBody
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
