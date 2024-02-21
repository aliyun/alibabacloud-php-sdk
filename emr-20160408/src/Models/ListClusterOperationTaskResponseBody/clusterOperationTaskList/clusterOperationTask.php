<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterOperationTaskResponseBody\clusterOperationTaskList;

use AlibabaCloud\Tea\Model;

class clusterOperationTask extends Model
{
    /**
     * @example 100
     *
     * @var string
     */
    public $percentage;

    /**
     * @example COMPLETED
     *
     * @var string
     */
    public $status;

    /**
     * @example 9060461
     *
     * @var string
     */
    public $taskId;

    /**
     * @example START_SparkHistory
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'percentage' => 'Percentage',
        'status'     => 'Status',
        'taskId'     => 'TaskId',
        'taskName'   => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->percentage) {
            $res['Percentage'] = $this->percentage;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterOperationTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Percentage'])) {
            $model->percentage = $map['Percentage'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
