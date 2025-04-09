<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetTaskByUuidResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetTaskByUuidResponseBody\task\conversations;

class task extends Model
{
    /**
     * @var int
     */
    public $actualTime;

    /**
     * @var string
     */
    public $callId;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var string
     */
    public $callingNumber;

    /**
     * @var conversations[]
     */
    public $conversations;

    /**
     * @var int
     */
    public $endReason;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $jobGroupId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var int
     */
    public $plannedTime;
    protected $_name = [
        'actualTime' => 'ActualTime',
        'callId' => 'CallId',
        'calledNumber' => 'CalledNumber',
        'callingNumber' => 'CallingNumber',
        'conversations' => 'Conversations',
        'endReason' => 'EndReason',
        'endTime' => 'EndTime',
        'id' => 'Id',
        'instanceId' => 'InstanceId',
        'jobGroupId' => 'JobGroupId',
        'jobId' => 'JobId',
        'plannedTime' => 'PlannedTime',
    ];

    public function validate()
    {
        if (\is_array($this->conversations)) {
            Model::validateArray($this->conversations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualTime) {
            $res['ActualTime'] = $this->actualTime;
        }

        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }

        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }

        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }

        if (null !== $this->conversations) {
            if (\is_array($this->conversations)) {
                $res['Conversations'] = [];
                $n1 = 0;
                foreach ($this->conversations as $item1) {
                    $res['Conversations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->endReason) {
            $res['EndReason'] = $this->endReason;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->plannedTime) {
            $res['PlannedTime'] = $this->plannedTime;
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
        if (isset($map['ActualTime'])) {
            $model->actualTime = $map['ActualTime'];
        }

        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }

        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }

        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }

        if (isset($map['Conversations'])) {
            if (!empty($map['Conversations'])) {
                $model->conversations = [];
                $n1 = 0;
                foreach ($map['Conversations'] as $item1) {
                    $model->conversations[$n1++] = conversations::fromMap($item1);
                }
            }
        }

        if (isset($map['EndReason'])) {
            $model->endReason = $map['EndReason'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['JobGroupId'])) {
            $model->jobGroupId = $map['JobGroupId'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['PlannedTime'])) {
            $model->plannedTime = $map['PlannedTime'];
        }

        return $model;
    }
}
