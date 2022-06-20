<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dplus\V20201216\Models\GetTaskResultResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $result;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $statusName;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'result'     => 'Result',
        'status'     => 'Status',
        'statusName' => 'StatusName',
        'taskId'     => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusName) {
            $res['StatusName'] = $this->statusName;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusName'])) {
            $model->statusName = $map['StatusName'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
