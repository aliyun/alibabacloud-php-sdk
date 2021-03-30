<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDDLPublishRecordsResponseBody\DDLPublishRecordList\publishTaskInfoList;

use AlibabaCloud\Tea\Model;

class publishJobList extends Model
{
    /**
     * @var int
     */
    public $executeCount;

    /**
     * @var string
     */
    public $scripts;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $statusDesc;

    /**
     * @var string
     */
    public $taskJobStatus;

    /**
     * @var int
     */
    public $DBTaskGroupId;
    protected $_name = [
        'executeCount'  => 'ExecuteCount',
        'scripts'       => 'Scripts',
        'tableName'     => 'TableName',
        'statusDesc'    => 'StatusDesc',
        'taskJobStatus' => 'TaskJobStatus',
        'DBTaskGroupId' => 'DBTaskGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executeCount) {
            $res['ExecuteCount'] = $this->executeCount;
        }
        if (null !== $this->scripts) {
            $res['Scripts'] = $this->scripts;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }
        if (null !== $this->taskJobStatus) {
            $res['TaskJobStatus'] = $this->taskJobStatus;
        }
        if (null !== $this->DBTaskGroupId) {
            $res['DBTaskGroupId'] = $this->DBTaskGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return publishJobList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecuteCount'])) {
            $model->executeCount = $map['ExecuteCount'];
        }
        if (isset($map['Scripts'])) {
            $model->scripts = $map['Scripts'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }
        if (isset($map['TaskJobStatus'])) {
            $model->taskJobStatus = $map['TaskJobStatus'];
        }
        if (isset($map['DBTaskGroupId'])) {
            $model->DBTaskGroupId = $map['DBTaskGroupId'];
        }

        return $model;
    }
}
