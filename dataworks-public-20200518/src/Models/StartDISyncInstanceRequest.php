<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class StartDISyncInstanceRequest extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $fileId;

    /**
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @example {"failoverLimit":{"count":10,"interval":30},"errorLimit":{"record":0},"ddlMarkMap":{"RENAMECOLUMN":"WARNING","DROPTABLE":"WARNING","CREATETABLE":"IGNORE","MODIFYCOLUMN":"WARNING","TRUNCATETABLE":"NORMAL","DROPCOLUMN":"IGNORE","ADDCOLUMN":"NORMAL","RENAMETABLE":"CRITICAL"}}
     *
     * @var string
     */
    public $startParam;

    /**
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
