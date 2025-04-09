<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListJobsResponseBody\jobs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListJobsResponseBody\jobs\tasks\contact;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListJobsResponseBody\jobs\tasks\conversation;

class tasks extends Model
{
    /**
     * @var int
     */
    public $actualTime;

    /**
     * @var string
     */
    public $brief;

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
     * @var string
     */
    public $chatbotId;

    /**
     * @var contact
     */
    public $contact;

    /**
     * @var conversation[]
     */
    public $conversation;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var int
     */
    public $planedTime;

    /**
     * @var string
     */
    public $scenarioId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'actualTime' => 'ActualTime',
        'brief' => 'Brief',
        'callId' => 'CallId',
        'calledNumber' => 'CalledNumber',
        'callingNumber' => 'CallingNumber',
        'chatbotId' => 'ChatbotId',
        'contact' => 'Contact',
        'conversation' => 'Conversation',
        'duration' => 'Duration',
        'jobId' => 'JobId',
        'planedTime' => 'PlanedTime',
        'scenarioId' => 'ScenarioId',
        'status' => 'Status',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (null !== $this->contact) {
            $this->contact->validate();
        }
        if (\is_array($this->conversation)) {
            Model::validateArray($this->conversation);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualTime) {
            $res['ActualTime'] = $this->actualTime;
        }

        if (null !== $this->brief) {
            $res['Brief'] = $this->brief;
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

        if (null !== $this->chatbotId) {
            $res['ChatbotId'] = $this->chatbotId;
        }

        if (null !== $this->contact) {
            $res['Contact'] = null !== $this->contact ? $this->contact->toArray($noStream) : $this->contact;
        }

        if (null !== $this->conversation) {
            if (\is_array($this->conversation)) {
                $res['Conversation'] = [];
                $n1 = 0;
                foreach ($this->conversation as $item1) {
                    $res['Conversation'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->planedTime) {
            $res['PlanedTime'] = $this->planedTime;
        }

        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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

        if (isset($map['Brief'])) {
            $model->brief = $map['Brief'];
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

        if (isset($map['ChatbotId'])) {
            $model->chatbotId = $map['ChatbotId'];
        }

        if (isset($map['Contact'])) {
            $model->contact = contact::fromMap($map['Contact']);
        }

        if (isset($map['Conversation'])) {
            if (!empty($map['Conversation'])) {
                $model->conversation = [];
                $n1 = 0;
                foreach ($map['Conversation'] as $item1) {
                    $model->conversation[$n1++] = conversation::fromMap($item1);
                }
            }
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['PlanedTime'])) {
            $model->planedTime = $map['PlanedTime'];
        }

        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
