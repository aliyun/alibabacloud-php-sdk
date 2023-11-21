<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class RebuildDBInstanceResponseBody extends Model
{
    /**
     * @description The serial number of the task in the rebuild task queue. When the serial number becomes 0, the system starts to rebuild the secondary instance.
     *
     * @example 3298015
     *
     * @var int
     */
    public $migrationId;

    /**
     * @description The request ID.
     *
     * @example 355DA57C-8CC4-40AB-B3F8-B684BA32EB9E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The task ID.
     *
     * @example 208676661
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
     * @return RebuildDBInstanceResponseBody
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
