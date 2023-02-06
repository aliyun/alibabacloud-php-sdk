<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSendFileResultsResponseBody\invocations\invocation\invokeInstances;

use AlibabaCloud\Tea\Model;

class invokeInstance extends Model
{
    /**
     * @description The time when the file sending task was created.
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
     *   InstanceNotExists: The instance does not exist or was released.
     *   InstanceReleased: The instance was released while the file was being sent.
     *   InstanceNotRunning: The instance was not running when the file sending task was being created.
     *   AccountNotExists: The specified account does not exist.
     *   ClientNotRunning: The Cloud Assistant client is not running.
     *   ClientNotResponse: The Cloud Assistant client is not responding.
     *   ClientIsUpgrading: The Cloud Assistant client is being upgraded.
     *   ClientNeedUpgrade: The Cloud Assistant client needs to be upgraded.
     *   DeliveryTimeout: The file sending task timed out.
     *   FileCreateFail: The file failed to be created.
     *   FileAlreadyExists: A file with the same name already exists in the specified directory.
     *   FileContentInvalid: The file content is invalid.
     *   FileNameInvalid: The file name is invalid.
     *   FilePathInvalid: The specified directory is invalid.
     *   FileAuthorityInvalid: The specified permissions on the file are invalid.
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
     *   the specified instance does not exists: The specified instance does not exist or was released.
     *   the instance has released when create task: The specified instance was released when the file was being sent.
     *   the instance is not running when create task: The specified instance was not running when the file sending task was being created.
     *   the specified account does not exists: The specified account does not exist.
     *   the aliyun service is not running on the instance: The Cloud Assistance client is not running.
     *   the aliyun service in the instance does not response: The Cloud Assistant client is not responding.
     *   the aliyun service in the instance is upgrading now: The Cloud Assistant client is being upgraded.
     *   the aliyun service in the instance need upgrade: The Cloud Assistant client needs to be upgraded.
     *   the command delivery has been timeout: The file sending task timed out.
     *   Unexpected error during creating: The file failed to be created.
     *   File already exists: A file with the same name already exists in the specified directory.
     *   File content error: The file content is invalid.
     *   File name is invalid: The file name is invalid.
     *   File path is invalid: The specified directory is invalid.
     *   Owner not exists: The owner of the file does not exist.
     *   Group not exists: The user group does not exist.
     *   Mode is invalid: The specified permissions on the file are invalid.
     *
     * @example the instance is not running when create task
     *
     * @var string
     */
    public $errorInfo;

    /**
     * @description The time when the file sending task finished being executed.
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
     * @description The state of the file sending task.
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
     * @description The time when the execution status was last updated.
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
