<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationsResponseBody\invocations;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationsResponseBody\invocations\invocation\invokeInstances;
use AlibabaCloud\Tea\Model;

class invocation extends Model
{
    /**
     * @var string
     */
    public $frequency;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $invocationStatus;

    /**
     * @var invokeInstances
     */
    public $invokeInstances;

    /**
     * @var string
     */
    public $commandId;

    /**
     * @var string
     */
    public $invokeStatus;

    /**
     * @var string
     */
    public $commandType;

    /**
     * @var string
     */
    public $parameters;

    /**
     * @var bool
     */
    public $timed;

    /**
     * @var string
     */
    public $commandContent;

    /**
     * @var string
     */
    public $commandName;

    /**
     * @var string
     */
    public $invokeId;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'frequency'        => 'Frequency',
        'creationTime'     => 'CreationTime',
        'invocationStatus' => 'InvocationStatus',
        'invokeInstances'  => 'InvokeInstances',
        'commandId'        => 'CommandId',
        'invokeStatus'     => 'InvokeStatus',
        'commandType'      => 'CommandType',
        'parameters'       => 'Parameters',
        'timed'            => 'Timed',
        'commandContent'   => 'CommandContent',
        'commandName'      => 'CommandName',
        'invokeId'         => 'InvokeId',
        'username'         => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->frequency) {
            $res['Frequency'] = $this->frequency;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->invocationStatus) {
            $res['InvocationStatus'] = $this->invocationStatus;
        }
        if (null !== $this->invokeInstances) {
            $res['InvokeInstances'] = null !== $this->invokeInstances ? $this->invokeInstances->toMap() : null;
        }
        if (null !== $this->commandId) {
            $res['CommandId'] = $this->commandId;
        }
        if (null !== $this->invokeStatus) {
            $res['InvokeStatus'] = $this->invokeStatus;
        }
        if (null !== $this->commandType) {
            $res['CommandType'] = $this->commandType;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->timed) {
            $res['Timed'] = $this->timed;
        }
        if (null !== $this->commandContent) {
            $res['CommandContent'] = $this->commandContent;
        }
        if (null !== $this->commandName) {
            $res['CommandName'] = $this->commandName;
        }
        if (null !== $this->invokeId) {
            $res['InvokeId'] = $this->invokeId;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invocation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Frequency'])) {
            $model->frequency = $map['Frequency'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['InvocationStatus'])) {
            $model->invocationStatus = $map['InvocationStatus'];
        }
        if (isset($map['InvokeInstances'])) {
            $model->invokeInstances = invokeInstances::fromMap($map['InvokeInstances']);
        }
        if (isset($map['CommandId'])) {
            $model->commandId = $map['CommandId'];
        }
        if (isset($map['InvokeStatus'])) {
            $model->invokeStatus = $map['InvokeStatus'];
        }
        if (isset($map['CommandType'])) {
            $model->commandType = $map['CommandType'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['Timed'])) {
            $model->timed = $map['Timed'];
        }
        if (isset($map['CommandContent'])) {
            $model->commandContent = $map['CommandContent'];
        }
        if (isset($map['CommandName'])) {
            $model->commandName = $map['CommandName'];
        }
        if (isset($map['InvokeId'])) {
            $model->invokeId = $map['InvokeId'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
