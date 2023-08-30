<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeCommandInvocationsResponseBody;

use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeCommandInvocationsResponseBody\commandInvocations\invokeInstances;
use AlibabaCloud\Tea\Model;

class commandInvocations extends Model
{
    /**
     * @example echo 123
     *
     * @var string
     */
    public $commandContent;

    /**
     * @example testDescription
     *
     * @var string
     */
    public $commandDescription;

    /**
     * @example c-hy0338xh28r****
     *
     * @var string
     */
    public $commandId;

    /**
     * @example testCommandName
     *
     * @var string
     */
    public $commandName;

    /**
     * @example RunShellScript
     *
     * @var string
     */
    public $commandType;

    /**
     * @example 2023-04-27T10:11:58
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example Success
     *
     * @var string
     */
    public $invocationStatus;

    /**
     * @example t-hz0373jyzxt****
     *
     * @var string
     */
    public $invokeId;

    /**
     * @var invokeInstances[]
     */
    public $invokeInstances;

    /**
     * @example {}
     *
     * @var string
     */
    public $parameters;

    /**
     * @example 60
     *
     * @var int
     */
    public $timeout;

    /**
     * @example root
     *
     * @var string
     */
    public $username;

    /**
     * @example c:\wwwroot
     *
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'commandContent'     => 'CommandContent',
        'commandDescription' => 'CommandDescription',
        'commandId'          => 'CommandId',
        'commandName'        => 'CommandName',
        'commandType'        => 'CommandType',
        'creationTime'       => 'CreationTime',
        'invocationStatus'   => 'InvocationStatus',
        'invokeId'           => 'InvokeId',
        'invokeInstances'    => 'InvokeInstances',
        'parameters'         => 'Parameters',
        'timeout'            => 'Timeout',
        'username'           => 'Username',
        'workingDir'         => 'WorkingDir',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandContent) {
            $res['CommandContent'] = $this->commandContent;
        }
        if (null !== $this->commandDescription) {
            $res['CommandDescription'] = $this->commandDescription;
        }
        if (null !== $this->commandId) {
            $res['CommandId'] = $this->commandId;
        }
        if (null !== $this->commandName) {
            $res['CommandName'] = $this->commandName;
        }
        if (null !== $this->commandType) {
            $res['CommandType'] = $this->commandType;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->invocationStatus) {
            $res['InvocationStatus'] = $this->invocationStatus;
        }
        if (null !== $this->invokeId) {
            $res['InvokeId'] = $this->invokeId;
        }
        if (null !== $this->invokeInstances) {
            $res['InvokeInstances'] = [];
            if (null !== $this->invokeInstances && \is_array($this->invokeInstances)) {
                $n = 0;
                foreach ($this->invokeInstances as $item) {
                    $res['InvokeInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }
        if (null !== $this->workingDir) {
            $res['WorkingDir'] = $this->workingDir;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commandInvocations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommandContent'])) {
            $model->commandContent = $map['CommandContent'];
        }
        if (isset($map['CommandDescription'])) {
            $model->commandDescription = $map['CommandDescription'];
        }
        if (isset($map['CommandId'])) {
            $model->commandId = $map['CommandId'];
        }
        if (isset($map['CommandName'])) {
            $model->commandName = $map['CommandName'];
        }
        if (isset($map['CommandType'])) {
            $model->commandType = $map['CommandType'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['InvocationStatus'])) {
            $model->invocationStatus = $map['InvocationStatus'];
        }
        if (isset($map['InvokeId'])) {
            $model->invokeId = $map['InvokeId'];
        }
        if (isset($map['InvokeInstances'])) {
            if (!empty($map['InvokeInstances'])) {
                $model->invokeInstances = [];
                $n                      = 0;
                foreach ($map['InvokeInstances'] as $item) {
                    $model->invokeInstances[$n++] = null !== $item ? invokeInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }
        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }

        return $model;
    }
}
