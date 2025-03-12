<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class QueryPreCheckDatabaseRequest extends Model
{
    /**
     * @description The UUID of the agent that is used to back up the data of the database.
     *
     * > You can call the [DescribeUniBackupDatabase](~~DescribeUniBackupDatabase~~) operation to query the UUID.
     * @example ebc895506c6911ed800000163e0e****
     *
     * @var string
     */
    public $instanceUuid;

    /**
     * @description The ID of the database precheck task.
     *
     * > You can call the [StartPreCheckDatabase](~~StartPreCheckDatabase~~) operation to query the ID of the database precheck task.
     * @example t-000bc9nqwxsbyvod****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The region ID of the server that hosts the database.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $uniRegionId;
    protected $_name = [
        'instanceUuid' => 'InstanceUuid',
        'taskId'       => 'TaskId',
        'uniRegionId'  => 'UniRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceUuid) {
            $res['InstanceUuid'] = $this->instanceUuid;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->uniRegionId) {
            $res['UniRegionId'] = $this->uniRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryPreCheckDatabaseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceUuid'])) {
            $model->instanceUuid = $map['InstanceUuid'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['UniRegionId'])) {
            $model->uniRegionId = $map['UniRegionId'];
        }

        return $model;
    }
}
