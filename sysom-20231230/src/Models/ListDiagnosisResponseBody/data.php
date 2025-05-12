<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\ListDiagnosisResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var mixed
     */
    public $command;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $errMsg;

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
    public $taskId;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'code' => 'code',
        'command' => 'command',
        'createdAt' => 'created_at',
        'errMsg' => 'err_msg',
        'params' => 'params',
        'result' => 'result',
        'serviceName' => 'service_name',
        'status' => 'status',
        'taskId' => 'task_id',
        'updatedAt' => 'updated_at',
        'url' => 'url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->command) {
            $res['command'] = $this->command;
        }

        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
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

        if (null !== $this->updatedAt) {
            $res['updated_at'] = $this->updatedAt;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['command'])) {
            $model->command = $map['command'];
        }

        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
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

        if (isset($map['updated_at'])) {
            $model->updatedAt = $map['updated_at'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
