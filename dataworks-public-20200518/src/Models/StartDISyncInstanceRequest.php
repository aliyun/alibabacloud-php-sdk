<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class StartDISyncInstanceRequest extends Model
{
    /**
     * @description *   If you set the TaskType parameter to DI_REALTIME, the StartParam parameter specifies the startup parameters for the real-time synchronization node. The startup parameters include failover-related parameters, the parameter that specifies the number of dirty data records allowed, and the parameters in the data definition language (DDL) statements.
     *   If you set the TaskType parameter to DI_SOLUTION, the StartParam parameter does not take effect.
     *
     * This parameter is required.
     * @example 100
     *
     * @var int
     */
    public $fileId;

    /**
     * @description The type of the Data Integration object that you want to start. Valid values:
     *
     *   DI_REALTIME: real-time synchronization node
     *   DI_SOLUTION: data synchronization solution
     *
     * This parameter is required.
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description Indicates whether the request is successful. Valid values:
     *
     *   true: The request succeeded.
     *   false: The request failed.
     *
     * @example {"failoverLimit":{"count":10,"interval":30},"errorLimit":{"record":0},"ddlMarkMap":{"RENAMECOLUMN":"WARNING","DROPTABLE":"WARNING","CREATETABLE":"IGNORE","MODIFYCOLUMN":"WARNING","TRUNCATETABLE":"NORMAL","DROPCOLUMN":"IGNORE","ADDCOLUMN":"NORMAL","RENAMETABLE":"CRITICAL"}}
     *
     * @var string
     */
    public $startParam;

    /**
     * @description *   If you set the TaskType parameter to DI_REALTIME, set the FileId parameter to the ID of the real-time synchronization node that you want to start.
     *   If you set the TaskType parameter to DI_SOLUTION, set the FileId parameter to the ID of the data synchronization solution that you want to start.
     *
     * This parameter is required.
     * @example DI_REALTIME
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'fileId'     => 'FileId',
        'projectId'  => 'ProjectId',
        'startParam' => 'StartParam',
        'taskType'   => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->startParam) {
            $res['StartParam'] = $this->startParam;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartDISyncInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['StartParam'])) {
            $model->startParam = $map['StartParam'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
