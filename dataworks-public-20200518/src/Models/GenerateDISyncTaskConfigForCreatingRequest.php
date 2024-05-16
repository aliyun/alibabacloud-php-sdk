<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GenerateDISyncTaskConfigForCreatingRequest extends Model
{
    /**
     * @description Indicates whether the request is successful. Valid values:
     *
     *   true: The request is successful.
     *   false: The request fails.
     *
     * @example ABFUOEUOTRTRJKE
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The type of the object that you want to create in Data Integration in asynchronous mode. Valid values:
     *
     *   DI_REALTIME: real-time synchronization node
     *   DI_SOLUTION: synchronization solution
     *
     * This parameter is required.
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The client token that is used to ensure the idempotence of the request. This parameter is used to prevent repeated operations that are caused by multiple calls.
     *
     * This parameter is required.
     * @example {    "type": "realtime",     "version": "1.0",        "setting": {       "resourceGroup":       "S_res_group_280749521950784_1623033752022",        "scheduleResgroupId": 30003913,       "name": "openapi_realtime_solution_0813_1739",       "taskType": "oneclick_to_odps"     },     "steps": [         {             "stepType": "mysql",             "parameter": {                 "connection": [                     {                        "datasourceType": "mysql",                         "datasource": "mysql_pub",                         "table": [                             "xyx"                         ]                     }                 ]             },             "name": "Reader",             "category": "reader"         },         {             "stepType": "odps",             "parameter": {                 "datasource": "odps_first"             },             "name": "Writer",             "category": "writer"         }     ] }
     *
     * @var string
     */
    public $taskParam;

    /**
     * @description The script for the real-time synchronization node or synchronization solution in Data Integration.
     *
     * The following types of real-time synchronization nodes and synchronization solutions are supported:
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
     * This parameter is required.
     * @example DI_REALTIME
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'projectId'   => 'ProjectId',
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
     * @return GenerateDISyncTaskConfigForCreatingRequest
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
        if (isset($map['TaskParam'])) {
            $model->taskParam = $map['TaskParam'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
