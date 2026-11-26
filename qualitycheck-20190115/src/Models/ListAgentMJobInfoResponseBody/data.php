<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListAgentMJobInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $dataEndTime;

    /**
     * @var string
     */
    public $dataStartTime;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskEndTime;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskStartTime;
    protected $_name = [
        'dataEndTime' => 'DataEndTime',
        'dataStartTime' => 'DataStartTime',
        'id' => 'Id',
        'message' => 'Message',
        'status' => 'Status',
        'taskEndTime' => 'TaskEndTime',
        'taskId' => 'TaskId',
        'taskStartTime' => 'TaskStartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataEndTime) {
            $res['DataEndTime'] = $this->dataEndTime;
        }

        if (null !== $this->dataStartTime) {
            $res['DataStartTime'] = $this->dataStartTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskEndTime) {
            $res['TaskEndTime'] = $this->taskEndTime;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskStartTime) {
            $res['TaskStartTime'] = $this->taskStartTime;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataEndTime'])) {
            $model->dataEndTime = $map['DataEndTime'];
        }

        if (isset($map['DataStartTime'])) {
            $model->dataStartTime = $map['DataStartTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskEndTime'])) {
            $model->taskEndTime = $map['TaskEndTime'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskStartTime'])) {
            $model->taskStartTime = $map['TaskStartTime'];
        }

        return $model;
    }
}
