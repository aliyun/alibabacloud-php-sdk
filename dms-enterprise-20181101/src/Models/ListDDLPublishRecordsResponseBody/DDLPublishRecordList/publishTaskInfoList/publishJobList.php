<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDDLPublishRecordsResponseBody\DDLPublishRecordList\publishTaskInfoList;

use AlibabaCloud\Tea\Model;

class publishJobList extends Model
{
    /**
     * @description The ID of the SQL task group.
     *
     * @example 423515
     *
     * @var int
     */
    public $DBTaskGroupId;

    /**
     * @description The number of SQL statements that are executed.
     *
     * @example 0
     *
     * @var int
     */
    public $executeCount;

    /**
     * @description The script for data changes.
     *
     * @example ALTER TABLE test_toolkit_rename_table_after_rename MODIFY COLUMN gmt_modified datetime NOT NULL
     *
     * @var string
     */
    public $scripts;

    /**
     * @description The description of the state.
     *
     * @example NONE
     *
     * @var string
     */
    public $statusDesc;

    /**
     * @description The name of the table after the change.
     *
     * @example test_toolkit_rename_table_after_rename
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The state of the publishing task. Valid values:
     *
     *   **NONE**: The state of the task is unknown.
     *   **SUCCESS**: The task is successful.
     *   **FAIL**: The task fails.
     *
     * @example NONE
     *
     * @var string
     */
    public $taskJobStatus;
    protected $_name = [
        'DBTaskGroupId' => 'DBTaskGroupId',
        'executeCount' => 'ExecuteCount',
        'scripts' => 'Scripts',
        'statusDesc' => 'StatusDesc',
        'tableName' => 'TableName',
        'taskJobStatus' => 'TaskJobStatus',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBTaskGroupId) {
            $res['DBTaskGroupId'] = $this->DBTaskGroupId;
        }
        if (null !== $this->executeCount) {
            $res['ExecuteCount'] = $this->executeCount;
        }
        if (null !== $this->scripts) {
            $res['Scripts'] = $this->scripts;
        }
        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->taskJobStatus) {
            $res['TaskJobStatus'] = $this->taskJobStatus;
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
        if (isset($map['DBTaskGroupId'])) {
            $model->DBTaskGroupId = $map['DBTaskGroupId'];
        }
        if (isset($map['ExecuteCount'])) {
            $model->executeCount = $map['ExecuteCount'];
        }
        if (isset($map['Scripts'])) {
            $model->scripts = $map['Scripts'];
        }
        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TaskJobStatus'])) {
            $model->taskJobStatus = $map['TaskJobStatus'];
        }

        return $model;
    }
}
