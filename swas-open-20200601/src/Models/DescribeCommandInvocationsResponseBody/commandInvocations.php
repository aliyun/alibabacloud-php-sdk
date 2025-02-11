<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeCommandInvocationsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeCommandInvocationsResponseBody\commandInvocations\invokeInstances;

class commandInvocations extends Model
{
    /**
     * @var string
     */
    public $commandContent;
    /**
     * @var string
     */
    public $commandDescription;
    /**
     * @var string
     */
    public $commandId;
    /**
     * @var string
     */
    public $commandName;
    /**
     * @var string
     */
    public $commandType;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var string
     */
    public $invocationStatus;
    /**
     * @var string
     */
    public $invokeId;
    /**
     * @var invokeInstances[]
     */
    public $invokeInstances;
    /**
     * @var string
     */
    public $parameters;
    /**
     * @var int
     */
    public $timeout;
    /**
     * @var string
     */
    public $username;
    /**
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
        if (\is_array($this->invokeInstances)) {
            Model::validateArray($this->invokeInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->invokeInstances)) {
                $res['InvokeInstances'] = [];
                $n1                     = 0;
                foreach ($this->invokeInstances as $item1) {
                    $res['InvokeInstances'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1                     = 0;
                foreach ($map['InvokeInstances'] as $item1) {
                    $model->invokeInstances[$n1++] = invokeInstances::fromMap($item1);
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
