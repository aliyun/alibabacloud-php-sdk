<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class QueryDISyncTaskConfigProcessResultRequest extends Model
{
    /**
     * @description The ID of the asynchronous thread. You can call the [GenerateDISyncTaskConfigForCreating](~~383463~~) or [GenerateDISyncTaskConfigForUpdating](~~383464~~) operation to generate the ID.
     *
     *   The GenerateDISyncTaskConfigForCreating operation is used to generate the ID of the asynchronous thread that is used to create a real-time synchronization node or a synchronization solution in Data Integration.
     *   The GenerateDISyncTaskConfigForUpdating operation is used to generate the ID of the asynchronous thread that is used to update a real-time synchronization node or a synchronization solution in Data Integration.
     *
     * @example 10
     *
     * @var int
     */
    public $asyncProcessId;

    /**
     * @description The ID of the DataWorks workspace. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace Management page to obtain the workspace ID.
     *
     * This parameter specifies the DataWorks workspace to which the operation is applied.
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The type of the object that you want to create or update in Data Integration in asynchronous mode. Valid values:
     *
     *   DI_REALTIME: real-time synchronization node
     *
     *   DI_SOLUTION: synchronization solution
     *
     * DataWorks allows you to create or update real-time synchronization nodes and synchronization solutions in Data Integration only in asynchronous mode.
     * @example DI_REALTIME
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'asyncProcessId' => 'AsyncProcessId',
        'projectId'      => 'ProjectId',
        'taskType'       => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asyncProcessId) {
            $res['AsyncProcessId'] = $this->asyncProcessId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDISyncTaskConfigProcessResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsyncProcessId'])) {
            $model->asyncProcessId = $map['AsyncProcessId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
