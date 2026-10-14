<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\GetAifgResultResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var mixed
     */
    public $result;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $submitTime;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $traceTaskId;
    protected $_name = [
        'result' => 'result',
        'serviceName' => 'serviceName',
        'status' => 'status',
        'submitTime' => 'submitTime',
        'taskId' => 'taskId',
        'traceTaskId' => 'traceTaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }

        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->submitTime) {
            $res['submitTime'] = $this->submitTime;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->traceTaskId) {
            $res['traceTaskId'] = $this->traceTaskId;
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
        if (isset($map['result'])) {
            $model->result = $map['result'];
        }

        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['submitTime'])) {
            $model->submitTime = $map['submitTime'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['traceTaskId'])) {
            $model->traceTaskId = $map['traceTaskId'];
        }

        return $model;
    }
}
