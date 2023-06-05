<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GenerateDISyncTaskConfigForUpdatingRequest extends Model
{
    /**
     * @description The ID of the real-time synchronization node or synchronization solution.
     *
     *   If you set the TaskType parameter to DI_REALTIME, set the TaskId parameter to the value of the FileId parameter for the real-time synchronization node.
     *   If you set the TaskType parameter to DI_SOLUTION, set the TaskId parameter to the value of the FileId parameter for the synchronization solution.
     *
     * @example ABFUOEUOTRTRJKE
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The type of the object that you want to update in Data Integration in asynchronous mode. Valid values:
     *
     *   DI_REALTIME: real-time synchronization node
     *
     *   DI_SOLUTION: synchronization solution
     *
     * DataWorks allows you to update real-time synchronization nodes and synchronization solutions in Data Integration only in asynchronous mode.
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description Indicates whether the request is successful. Valid values:
     *
     *   true: The request is successful.
     *   false: The request fails.
     *
     * @example 100
     *
     * @var int
     */
    public $taskId;

    /**
     * @description The client token that is used to ensure the idempotence of the request. This parameter is used to prevent repeated operations that are caused by multiple calls.
     *
     * @example {      "steps": [         {             "parameter": {                 "connection": [                     {                         "table": [                             "xyx"                         ]                     }                 ]             },             "name": "Reader",             "category": "reader"         }     ] }
     *
     * @var string
     */
    public $taskParam;

    /**
     * @description The script for updating the real-time synchronization node or synchronization solution in Data Integration.
     *
     * DataWorks allows you to add or remove tables for a real-time synchronization node or a synchronization solution in Data Integration only in asynchronous mode. The following types of real-time synchronization nodes and synchronization solutions are supported:
     *
     *   Real-time synchronization node or synchronization solution that is used to synchronize data from MySQL to MaxCompute
     *   Real-time synchronization node or synchronization solution that is used to synchronize data from MySQL data to Kafka
     *   Real-time synchronization node or synchronization solution that is used to synchronize data from MySQL to Hologres
     *
     * The SelectedTables parameter is used to specify tables that you want to synchronize from multiple databases. The Tables parameter is used to specify tables that you want to synchronize from a single database.
     *
     *   If the script contains the SelectedTables parameter, the system synchronizes the tables that you specify in the SelectedTables parameter.
     *   If the script contains the Tables parameter, the system synchronizes the tables that you specify in the Tables parameter.
     *
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
