<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListCommandInvocationResultsResponseBody;

use AlibabaCloud\Dara\Model;

class commandInvocationResultModel extends Model
{
    /**
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @var string
     */
    public $appInstanceId;

    /**
     * @var string
     */
    public $appInstancePersistentId;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var string
     */
    public $invocationId;

    /**
     * @var string
     */
    public $invocationStatus;

    /**
     * @var string
     */
    public $output;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'appInstanceId' => 'AppInstanceId',
        'appInstancePersistentId' => 'AppInstancePersistentId',
        'finishTime' => 'FinishTime',
        'invocationId' => 'InvocationId',
        'invocationStatus' => 'InvocationStatus',
        'output' => 'Output',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }

        if (null !== $this->appInstanceId) {
            $res['AppInstanceId'] = $this->appInstanceId;
        }

        if (null !== $this->appInstancePersistentId) {
            $res['AppInstancePersistentId'] = $this->appInstancePersistentId;
        }

        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }

        if (null !== $this->invocationId) {
            $res['InvocationId'] = $this->invocationId;
        }

        if (null !== $this->invocationStatus) {
            $res['InvocationStatus'] = $this->invocationStatus;
        }

        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }

        if (isset($map['AppInstanceId'])) {
            $model->appInstanceId = $map['AppInstanceId'];
        }

        if (isset($map['AppInstancePersistentId'])) {
            $model->appInstancePersistentId = $map['AppInstancePersistentId'];
        }

        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }

        if (isset($map['InvocationId'])) {
            $model->invocationId = $map['InvocationId'];
        }

        if (isset($map['InvocationStatus'])) {
            $model->invocationStatus = $map['InvocationStatus'];
        }

        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
