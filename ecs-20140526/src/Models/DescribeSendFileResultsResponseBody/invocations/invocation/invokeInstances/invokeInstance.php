<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSendFileResultsResponseBody\invocations\invocation\invokeInstances;

use AlibabaCloud\Tea\Model;

class invokeInstance extends Model
{
    /**
     * @description The creation time of the file sending task.
     *
     * @example 2019-12-20T06:15:54Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The error code returned when the file failed to be sent to the instance. Valid values:
     *
     *   Null: The file is sent to the instance.
     *   InstanceNotExists: The instance does not exist or has been released.
     *   InstanceReleased: The instance is released while the file is being sent.
     *   InstanceNotRunning: The instance is not running when the file sending task is being created.
     *   AccountNotExists: The specified account does not exist.
     *   ClientNotRunning: Cloud Assistant Agent is not running.
     *   ClientNotResponse: Cloud Assistant Agent does not respond.
     *   ClientIsUpgrading: Cloud Assistant Agent is being upgraded.
     *   ClientNeedUpgrade: Cloud Assistant Agent needs to be upgraded.
     *   DeliveryTimeout: The file sending task timed out.
     *   FileCreateFail: The file failed to be created.
     *   FileAlreadyExists: A file with the same name exists in the specified directory.
     *   FileContentInvalid: The file content is invalid.
     *   FileNameInvalid: The file name is invalid.
     *   FilePathInvalid: The specified directory is invalid.
     *   FileAuthorityInvalid: The specified permissions on the file are invalid.
     *   UserGroupNotExists: The specified user group does not exist.
     *
     * @example InstanceNotExists
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned when the file failed to be sent or the file sending task failed to be executed. Valid values:
     *
     *   Null: The file is sent to the instance.
     *   the specified instance does not exists
     *   the specified instance has been released
     *   the instance is not running when create task
     *   the specified account does not exists
     *   the aliyun service is not running on the instance
     *   the aliyun service in the instance does not response
     *   the aliyun service in the instance is upgrading now
     *   the aliyun service in the instance need upgrade
     *   the command delivery has been timeout
     *   the file creation is failed due to unknown error
     *   the authority of file is invalid
     *   File content is empty
     *   the content of file is invalid
     *   File already exists
     *   File name is invalid
     *   File path is invalid
     *   Owner not exists
     *   Group not exists
     *   Mode is invalid
     *
     * @example the instance is not running when create task
     *
     * @var string
     */
    public $errorInfo;

    /**
     * @description The time when the file sending task was completed.
     *
     * @example 2019-12-20T06:15:54Z
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description The ID of the instance.
     *
     * @example i-uf614fhehhz****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The status of the file sending task. Valid values:
     *
     *   Pending: The file is being verified or sent.
     *   Invalid: The file is invalid.
     *   Running: The file is being sent to the instance.
     *   Aborted: The file failed to be sent to the instance.
     *   Success: The file is sent.
     *   Failed: The file failed to be created on the instance.
     *   Error: An error occurred and interrupted the file sending task.
     *   Timeout: The file sending task timed out.
     *
     * @example Success
     *
     * @var string
     */
    public $invocationStatus;

    /**
     * @description The time when the file sending task started to be executed on the instance.
     *
     * @example 2019-12-20T06:15:54Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The time when the task status was last updated.
     *
     * @example 2019-12-20T06:15:54Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'creationTime'     => 'CreationTime',
        'errorCode'        => 'ErrorCode',
        'errorInfo'        => 'ErrorInfo',
        'finishTime'       => 'FinishTime',
        'instanceId'       => 'InstanceId',
        'invocationStatus' => 'InvocationStatus',
        'startTime'        => 'StartTime',
        'updateTime'       => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorInfo) {
            $res['ErrorInfo'] = $this->errorInfo;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->invocationStatus) {
            $res['InvocationStatus'] = $this->invocationStatus;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invokeInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorInfo'])) {
            $model->errorInfo = $map['ErrorInfo'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InvocationStatus'])) {
            $model->invocationStatus = $map['InvocationStatus'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
