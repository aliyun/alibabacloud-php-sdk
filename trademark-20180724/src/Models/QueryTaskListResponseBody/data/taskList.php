<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTaskListResponseBody\data;

use AlibabaCloud\Tea\Model;

class taskList extends Model
{
    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var int
     */
    public $completeTime;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $errMsg;

    /**
     * @var string
     */
    public $fileName;
    protected $_name = [
        'taskType'     => 'TaskType',
        'result'       => 'Result',
        'taskStatus'   => 'TaskStatus',
        'completeTime' => 'CompleteTime',
        'createTime'   => 'CreateTime',
        'errMsg'       => 'ErrMsg',
        'fileName'     => 'FileName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->errMsg) {
            $res['ErrMsg'] = $this->errMsg;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ErrMsg'])) {
            $model->errMsg = $map['ErrMsg'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        return $model;
    }
}
