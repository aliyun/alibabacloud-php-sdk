<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models;

use AlibabaCloud\Tea\Model;

class GetJobExecutionThreadDumpRequest extends Model
{
    /**
     * @example xxl-job-executor-sample
     *
     * @var string
     */
    public $appName;

    /**
     * @example xxljob-b6ec1xxxx
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example http://192.168.0.215:9966/
     *
     * @var string
     */
    public $executorAddr;

    /**
     * @example 1310630367761285120
     *
     * @var string
     */
    public $jobExecutionId;
    protected $_name = [
        'appName' => 'AppName',
        'clusterId' => 'ClusterId',
        'executorAddr' => 'ExecutorAddr',
        'jobExecutionId' => 'JobExecutionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->executorAddr) {
            $res['ExecutorAddr'] = $this->executorAddr;
        }
        if (null !== $this->jobExecutionId) {
            $res['JobExecutionId'] = $this->jobExecutionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJobExecutionThreadDumpRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ExecutorAddr'])) {
            $model->executorAddr = $map['ExecutorAddr'];
        }
        if (isset($map['JobExecutionId'])) {
            $model->jobExecutionId = $map['JobExecutionId'];
        }

        return $model;
    }
}
