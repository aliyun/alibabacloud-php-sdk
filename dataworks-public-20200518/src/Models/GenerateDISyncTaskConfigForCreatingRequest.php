<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GenerateDISyncTaskConfigForCreatingRequest extends Model
{
    /**
     * @example ABFUOEUOTRTRJKE
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @example {    "type": "realtime",     "version": "1.0",        "setting": {       "resourceGroup":       "S_res_group_280749521950784_1623033752022",        "scheduleResgroupId": 30003913,       "name": "openapi_realtime_solution_0813_1739",       "taskType": "oneclick_to_odps"     },     "steps": [         {             "stepType": "mysql",             "parameter": {                 "connection": [                     {                        "datasourceType": "mysql",                         "datasource": "mysql_pub",                         "table": [                             "xyx"                         ]                     }                 ]             },             "name": "Reader",             "category": "reader"         },         {             "stepType": "odps",             "parameter": {                 "datasource": "odps_first"             },             "name": "Writer",             "category": "writer"         }     ] }
     *
     * @var string
     */
    public $taskParam;

    /**
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
