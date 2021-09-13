<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class SaveTerminalLogRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $callId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $dataType;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $uniqueRequestId;

    /**
     * @var string
     */
    public $methodName;
    protected $_name = [
        'instanceId'      => 'InstanceId',
        'callId'          => 'CallId',
        'jobId'           => 'JobId',
        'appName'         => 'AppName',
        'dataType'        => 'DataType',
        'content'         => 'Content',
        'status'          => 'Status',
        'uniqueRequestId' => 'UniqueRequestId',
        'methodName'      => 'MethodName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->uniqueRequestId) {
            $res['UniqueRequestId'] = $this->uniqueRequestId;
        }
        if (null !== $this->methodName) {
            $res['MethodName'] = $this->methodName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveTerminalLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UniqueRequestId'])) {
            $model->uniqueRequestId = $map['UniqueRequestId'];
        }
        if (isset($map['MethodName'])) {
            $model->methodName = $map['MethodName'];
        }

        return $model;
    }
}
