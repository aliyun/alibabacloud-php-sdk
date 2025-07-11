<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetLogEventResponseBody\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @example portal-dev
     *
     * @var string
     */
    public $appName;

    /**
     * @example hello word
     *
     * @var string
     */
    public $content;

    /**
     * @example info
     *
     * @var string
     */
    public $event;

    /**
     * @example 101
     *
     * @var string
     */
    public $jobExecutionId;

    /**
     * @example test
     *
     * @var string
     */
    public $jobName;

    /**
     * @example 2024-10-31 16:43:51
     *
     * @var string
     */
    public $time;

    /**
     * @example 030225016025_9357_60125@127.0.0.1:51363
     *
     * @var string
     */
    public $workerAddr;
    protected $_name = [
        'appName' => 'AppName',
        'content' => 'Content',
        'event' => 'Event',
        'jobExecutionId' => 'JobExecutionId',
        'jobName' => 'JobName',
        'time' => 'Time',
        'workerAddr' => 'WorkerAddr',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->event) {
            $res['Event'] = $this->event;
        }
        if (null !== $this->jobExecutionId) {
            $res['JobExecutionId'] = $this->jobExecutionId;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->workerAddr) {
            $res['WorkerAddr'] = $this->workerAddr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Event'])) {
            $model->event = $map['Event'];
        }
        if (isset($map['JobExecutionId'])) {
            $model->jobExecutionId = $map['JobExecutionId'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['WorkerAddr'])) {
            $model->workerAddr = $map['WorkerAddr'];
        }

        return $model;
    }
}
