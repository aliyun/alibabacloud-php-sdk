<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\ListAifgJobsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var mixed
     */
    public $command;

    /**
     * @var int
     */
    public $id;

    /**
     * @var mixed
     */
    public $params;

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
    public $subStatus;

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
        'command' => 'command',
        'id' => 'id',
        'params' => 'params',
        'result' => 'result',
        'serviceName' => 'serviceName',
        'status' => 'status',
        'subStatus' => 'subStatus',
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
        if (null !== $this->command) {
            $res['command'] = $this->command;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->params) {
            $res['params'] = $this->params;
        }

        if (null !== $this->result) {
            $res['result'] = $this->result;
        }

        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->subStatus) {
            $res['subStatus'] = $this->subStatus;
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
        if (isset($map['command'])) {
            $model->command = $map['command'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['params'])) {
            $model->params = $map['params'];
        }

        if (isset($map['result'])) {
            $model->result = $map['result'];
        }

        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['subStatus'])) {
            $model->subStatus = $map['subStatus'];
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
