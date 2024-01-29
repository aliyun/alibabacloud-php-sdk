<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\GetDiagnosisResultResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $code;

    /**
     * @example {
     * }
     * @var mixed
     */
    public $command;

    /**
     * @example Diagnosis failed
     *
     * @var string
     */
    public $errMsg;

    /**
     * @example {
     * }
     * @var mixed
     */
    public $params;

    /**
     * @example {
     * }
     * @var mixed
     */
    public $result;

    /**
     * @example memgraph
     *
     * @var string
     */
    public $serviceName;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example grcuU21a
     *
     * @var string
     */
    public $taskId;

    /**
     * @example /diagnose/detail/qe3Z34sa
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'code'        => 'code',
        'command'     => 'command',
        'errMsg'      => 'err_msg',
        'params'      => 'params',
        'result'      => 'result',
        'serviceName' => 'service_name',
        'status'      => 'status',
        'taskId'      => 'task_id',
        'url'         => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->command) {
            $res['command'] = $this->command;
        }
        if (null !== $this->errMsg) {
            $res['err_msg'] = $this->errMsg;
        }
        if (null !== $this->params) {
            $res['params'] = $this->params;
        }
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }
        if (null !== $this->serviceName) {
            $res['service_name'] = $this->serviceName;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['task_id'] = $this->taskId;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['command'])) {
            $model->command = $map['command'];
        }
        if (isset($map['err_msg'])) {
            $model->errMsg = $map['err_msg'];
        }
        if (isset($map['params'])) {
            $model->params = $map['params'];
        }
        if (isset($map['result'])) {
            $model->result = $map['result'];
        }
        if (isset($map['service_name'])) {
            $model->serviceName = $map['service_name'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['task_id'])) {
            $model->taskId = $map['task_id'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
