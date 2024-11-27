<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models;

use AlibabaCloud\Tea\Model;

class OperateExecuteJobRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example test-app
     *
     * @var string
     */
    public $appName;

    /**
     * @description This parameter is required.
     *
     * @example xxljob-b6ec1xxxx
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example name=zhangsan
     *
     * @var string
     */
    public $instanceParameters;

    /**
     * @description This parameter is required.
     *
     * @example 74
     *
     * @var int
     */
    public $jobId;

    /**
     * @example gray
     *
     * @var string
     */
    public $label;

    /**
     * @example http://192.168.1.5:9999/
     *
     * @var string
     */
    public $worker;
    protected $_name = [
        'appName'            => 'AppName',
        'clusterId'          => 'ClusterId',
        'instanceParameters' => 'InstanceParameters',
        'jobId'              => 'JobId',
        'label'              => 'Label',
        'worker'             => 'Worker',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->instanceParameters) {
            $res['InstanceParameters'] = $this->instanceParameters;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->worker) {
            $res['Worker'] = $this->worker;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperateExecuteJobRequest
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
        if (isset($map['InstanceParameters'])) {
            $model->instanceParameters = $map['InstanceParameters'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Worker'])) {
            $model->worker = $map['Worker'];
        }

        return $model;
    }
}
