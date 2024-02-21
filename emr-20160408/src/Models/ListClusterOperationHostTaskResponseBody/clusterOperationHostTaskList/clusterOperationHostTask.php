<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterOperationHostTaskResponseBody\clusterOperationHostTaskList;

use AlibabaCloud\Tea\Model;

class clusterOperationHostTask extends Model
{
    /**
     * @example 100
     *
     * @var string
     */
    public $percentage;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @example 111
     *
     * @var string
     */
    public $taskId;

    /**
     * @example START_SparkHistory_ON_emr-header-1
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
     * @return clusterOperationHostTask
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
