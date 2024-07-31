<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GenerateDISyncTaskConfigForUpdatingRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. This parameter is used to prevent repeated operations that are caused by multiple calls.
     *
     * @example ABFUOEUOTRTRJKE
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The DataWorks workspace ID. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace page to obtain the workspace ID.
     *
     * This parameter is required.
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The task ID.
     *
     *   If you set the TaskType parameter to DI_REALTIME, set the TaskId parameter to the value of the FileId parameter for the real-time synchronization task.
     *   If you set the TaskType parameter to DI_SOLUTION, set the TaskId parameter to the value of the FileId parameter for the synchronization solution.
     *
     * This parameter is required.
     * @example 100
     *
     * @var int
     */
    public $taskId;

    /**
     * @description The script for updating the real-time synchronization task in Data Integration. DataWorks allows you to add or remove tables for a real-time synchronization task in Data Integration only in asynchronous mode. The following types of real-time synchronization tasks are supported:
     *
     *   Synchronization task that is used to synchronize data from MySQL to MaxCompute
     *   Synchronization task that is used to synchronize data from MySQL data to Kafka
     *   Synchronization task that is used to synchronize data from MySQL to Hologres
     *
     * The SelectedTables parameter is used to specify tables that you want to synchronize from multiple databases. The Tables parameter is used to specify tables that you want to synchronize from a single database.
     *
     *   If the script contains the SelectedTables parameter, the system synchronizes data from the tables that you specify in the SelectedTables parameter.
     *   If the script contains the Tables parameter, the system synchronizes data from the tables that you specify in the Tables parameter.
     *
     * This parameter is required.
     * @example {      "steps": [         {             "parameter": {                 "connection": [                     {                         "table": [                             "xyx"                         ]                     }                 ]             },             "name": "Reader",             "category": "reader"         }     ] }
     *
     * @var string
     */
    public $taskParam;

    /**
     * @description The type of the object that you want to update in Data Integration in asynchronous mode. Valid values:
     *
     *   DI_REALTIME: real-time synchronization task
     *   DI_SOLUTION: synchronization solution DataWorks allows you to create or update real-time synchronization tasks in Data Integration only in asynchronous mode.
     *
     * Valid values:
     *
     *   DI_OFFLINE
     *   DI_REALTIME
     *   DI_SOLUTION
     *
     * This parameter is required.
     * @example DI_REALTIME
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'projectId'   => 'ProjectId',
        'taskId'      => 'TaskId',
        'taskParam'   => 'TaskParam',
        'taskType'    => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskParam) {
            $res['TaskParam'] = $this->taskParam;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateDISyncTaskConfigForUpdatingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskParam'])) {
            $model->taskParam = $map['TaskParam'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
