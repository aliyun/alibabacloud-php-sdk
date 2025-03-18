<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneImportTaskInfoResponseBody\data;

use AlibabaCloud\Tea\Model;

class status extends Model
{
    /**
     * @example success
     *
     * @var string
     */
    public $msg;

    /**
     * @example 80
     *
     * @var int
     */
    public $percentage;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @example 41405255
     *
     * @var string
     */
    public $taskId;

    /**
     * @example ft-task-20190101m8rnK
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'msg' => 'Msg',
        'percentage' => 'Percentage',
        'status' => 'Status',
        'taskId' => 'TaskId',
        'taskName' => 'TaskName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
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
     * @return status
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
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
