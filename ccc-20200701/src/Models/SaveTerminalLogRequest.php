<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class SaveTerminalLogRequest extends Model
{
    /**
     * @example CCCClient
     *
     * @var string
     */
    public $appName;

    /**
     * @example e13c9740-1e37-123b-21b6-00163e352f9
     *
     * @var string
     */
    public $callId;

    /**
     * @example none
     *
     * @var string
     */
    public $content;

    /**
     * @example 1
     *
     * @var int
     */
    public $dataType;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example job-b8b0ca63-330c-4e65-8ae3-9de2c7ce7683
     *
     * @var string
     */
    public $jobId;

    /**
     * @example TurnServerTest
     *
     * @var string
     */
    public $methodName;

    /**
     * @example true
     *
     * @var string
     */
    public $status;

    /**
     * @example none
     *
     * @var string
     */
    public $uniqueRequestId;
    protected $_name = [
        'appName'         => 'AppName',
        'callId'          => 'CallId',
        'content'         => 'Content',
        'dataType'        => 'DataType',
        'instanceId'      => 'InstanceId',
        'jobId'           => 'JobId',
        'methodName'      => 'MethodName',
        'status'          => 'Status',
        'uniqueRequestId' => 'UniqueRequestId',
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
        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->methodName) {
            $res['MethodName'] = $this->methodName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->uniqueRequestId) {
            $res['UniqueRequestId'] = $this->uniqueRequestId;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['MethodName'])) {
            $model->methodName = $map['MethodName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UniqueRequestId'])) {
            $model->uniqueRequestId = $map['UniqueRequestId'];
        }

        return $model;
    }
}
