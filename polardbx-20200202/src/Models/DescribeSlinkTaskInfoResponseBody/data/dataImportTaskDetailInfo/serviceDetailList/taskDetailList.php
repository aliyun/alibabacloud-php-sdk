<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeSlinkTaskInfoResponseBody\data\dataImportTaskDetailInfo\serviceDetailList;

use AlibabaCloud\Tea\Model;

class taskDetailList extends Model
{
    /**
     * @var int
     */
    public $delay;

    /**
     * @var string
     */
    public $lastError;

    /**
     * @var string
     */
    public $physicalDbName;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $statistics;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'delay'          => 'Delay',
        'lastError'      => 'LastError',
        'physicalDbName' => 'PhysicalDbName',
        'progress'       => 'Progress',
        'statistics'     => 'Statistics',
        'status'         => 'Status',
        'taskId'         => 'TaskId',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->delay) {
            $res['Delay'] = $this->delay;
        }
        if (null !== $this->lastError) {
            $res['LastError'] = $this->lastError;
        }
        if (null !== $this->physicalDbName) {
            $res['PhysicalDbName'] = $this->physicalDbName;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskDetailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Delay'])) {
            $model->delay = $map['Delay'];
        }
        if (isset($map['LastError'])) {
            $model->lastError = $map['LastError'];
        }
        if (isset($map['PhysicalDbName'])) {
            $model->physicalDbName = $map['PhysicalDbName'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
