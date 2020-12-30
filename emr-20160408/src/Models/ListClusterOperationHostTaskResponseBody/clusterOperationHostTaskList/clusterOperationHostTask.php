<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterOperationHostTaskResponseBody\clusterOperationHostTaskList;

use AlibabaCloud\Tea\Model;

class clusterOperationHostTask extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $percentage;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'status'     => 'Status',
        'taskName'   => 'TaskName',
        'percentage' => 'Percentage',
        'taskId'     => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->percentage) {
            $res['Percentage'] = $this->percentage;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['Percentage'])) {
            $model->percentage = $map['Percentage'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
