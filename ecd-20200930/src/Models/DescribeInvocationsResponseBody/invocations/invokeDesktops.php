<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeInvocationsResponseBody\invocations;

use AlibabaCloud\Tea\Model;

class invokeDesktops extends Model
{
    /**
     * @description The time when the command execution was performed.
     *
     * @example 2020-12-20T06:15:54Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The ID of the cloud desktop.
     *
     * @example ecd-7w78ozhjcwa3u****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The name of the cloud desktop.
     *
     * @example demo1234
     *
     * @var string
     */
    public $desktopName;

    /**
     * @description The size of the text that is truncated and discarded when the Output value exceeds 24 KB in size.
     *
     * @example 0
     *
     * @var int
     */
    public $dropped;

    /**
     * @description The code that indicates the reason why a command failed to be sent or executed. The valid values include:
     *
     *   If this parameter is empty, the execution is normal.
     *   InstanceNotExists: The specified cloud desktop does not exist or is released.
     *   InstanceReleased: The cloud desktop is released during the execution.
     *   InstanceNotRunning: The cloud desktop is not running during the execution.
     *   CommandNotApplicable: The command cannot be used on the cloud desktop.
     *   ClientNotRunning: The Cloud Assistant client is not running.
     *   ClientNotResponse: The Cloud Assistant client does not respond.
     *   ClientIsUpgrading: The Cloud Assistant client is being upgraded.
     *   ClientNeedUpgrade: The Cloud Assistant client needs to be upgraded.
     *   DeliveryTimeout: The time to send the command in the request times out.
     *   ExecutionTimeout: The execution times out.
     *   ExecutionException: An exception occurs during the execution.
     *   ExecutionInterrupted: The execution is interrupted.
     *   ExitCodeNonzero: The execution finishes, but the exit code is not 0.
     *
     * @example InstanceNotExists
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description Details about the reason why the command failed to be sent or executed. The valid values include:
     *
     *   If this parameter is empty, the execution is normal.
     *   the specified instance does not exists: The cloud desktop does not exist or is released.
     *   the instance has released when create task: The cloud desktop is released during execution.
     *   the instance is not running when create task: The cloud desktop is not running when the execution is being performed.
     *   the command is not applicable: The command cannot be used on the specified cloud desktop.
     *   the aliyun service is not running on the instance: The Cloud Assistance client is not running.
     *   the aliyun service in the instance does not response: The Cloud Assistant client is not responding.
     *   the aliyun service in the instance is upgrading now: The Cloud Assistant client is being upgraded.
     *   the aliyun service in the instance need upgrade: The Cloud Assistant client needs to be upgraded.
     *   the command delivery has been timeout: The command that is sent in the request times out.
     *   the command execution has been timeout: The execution times out.
     *   the command execution got an exception: An exception occurs when the command is running.
     *   the command execution has been interrupted: The execution is interrupted.
     *   the command execution exit code is not zero: The execution finishes, but the exit code is not 0.
     *
     * @example The specified instance does not exist.
     *
     * @var string
     */
    public $errorInfo;

    /**
     * @description The exit code of the execution.
     *
     * @example 0
     *
     * @var int
     */
    public $exitCode;

    /**
     * @description The time when the command execution ended.
     *
     * @example 2020-12-20T06:15:56Z
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description The execution status on the cloud desktop.
     *
     * @example Success
     *
     * @var string
     */
    public $invocationStatus;

    /**
     * @description The command output.
     *
     *   If the IncludeOutput parameter is set to false, Output is not returned.
     *   If the ContentEncoding parameter is set to Base64, the value of Output is the output information that is encoded in Base64.
     *
     * @example OutPutTestmsg
     *
     * @var string
     */
    public $output;

    /**
     * @description The number of times that the command is executed on the cloud desktop.
     *
     * @example 0
     *
     * @var int
     */
    public $repeats;

    /**
     * @description The start time of the execution on the cloud desktop.
     *
     * @example 2020-12-20T06:15:55Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The time when you called the [StopInvocation](~~196957#doc-api-ecd-StopInvocation~~ "You can call this operation to stop a Cloud Assistant command that is running on one or cloud desktops.") operation to manually stop the command.
     *
     * @example 2020-12-25T09:15:47Z
     *
     * @var string
     */
    public $stopTime;

    /**
     * @description The time when the execution status was updated.
     *
     * @example 2020-12-25T06:15:56Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'creationTime'     => 'CreationTime',
        'desktopId'        => 'DesktopId',
        'desktopName'      => 'DesktopName',
        'dropped'          => 'Dropped',
        'errorCode'        => 'ErrorCode',
        'errorInfo'        => 'ErrorInfo',
        'exitCode'         => 'ExitCode',
        'finishTime'       => 'FinishTime',
        'invocationStatus' => 'InvocationStatus',
        'output'           => 'Output',
        'repeats'          => 'Repeats',
        'startTime'        => 'StartTime',
        'stopTime'         => 'StopTime',
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
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }
        if (null !== $this->dropped) {
            $res['Dropped'] = $this->dropped;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorInfo) {
            $res['ErrorInfo'] = $this->errorInfo;
        }
        if (null !== $this->exitCode) {
            $res['ExitCode'] = $this->exitCode;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->invocationStatus) {
            $res['InvocationStatus'] = $this->invocationStatus;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->repeats) {
            $res['Repeats'] = $this->repeats;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->stopTime) {
            $res['StopTime'] = $this->stopTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invokeDesktops
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }
        if (isset($map['Dropped'])) {
            $model->dropped = $map['Dropped'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorInfo'])) {
            $model->errorInfo = $map['ErrorInfo'];
        }
        if (isset($map['ExitCode'])) {
            $model->exitCode = $map['ExitCode'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['InvocationStatus'])) {
            $model->invocationStatus = $map['InvocationStatus'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['Repeats'])) {
            $model->repeats = $map['Repeats'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StopTime'])) {
            $model->stopTime = $map['StopTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
