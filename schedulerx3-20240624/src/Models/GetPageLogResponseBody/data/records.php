<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetPageLogResponseBody\data;

use AlibabaCloud\Dara\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $jobExecutionId;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var string
     */
    public $log;

    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $workerAddr;
    protected $_name = [
        'appName' => 'AppName',
        'jobExecutionId' => 'JobExecutionId',
        'jobName' => 'JobName',
        'log' => 'Log',
        'time' => 'Time',
        'userId' => 'UserId',
        'workerAddr' => 'WorkerAddr',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->jobExecutionId) {
            $res['JobExecutionId'] = $this->jobExecutionId;
        }

        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }

        if (null !== $this->log) {
            $res['Log'] = $this->log;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->workerAddr) {
            $res['WorkerAddr'] = $this->workerAddr;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['JobExecutionId'])) {
            $model->jobExecutionId = $map['JobExecutionId'];
        }

        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }

        if (isset($map['Log'])) {
            $model->log = $map['Log'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['WorkerAddr'])) {
            $model->workerAddr = $map['WorkerAddr'];
        }

        return $model;
    }
}
