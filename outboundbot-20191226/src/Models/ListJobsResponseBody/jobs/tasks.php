<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListJobsResponseBody\jobs;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListJobsResponseBody\jobs\tasks\contact;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListJobsResponseBody\jobs\tasks\conversation;
use AlibabaCloud\Tea\Model;

class tasks extends Model
{
    /**
     * @example 1579068424883
     *
     * @var int
     */
    public $actualTime;

    /**
     * @example 1
     *
     * @var string
     */
    public $brief;

    /**
     * @example 1528189846043
     *
     * @var string
     */
    public $callId;

    /**
     * @example 135****8888
     *
     * @var string
     */
    public $calledNumber;

    /**
     * @example 0571****3106
     *
     * @var string
     */
    public $callingNumber;

    /**
     * @example 1234
     *
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
     * @example 120
     *
     * @var int
     */
    public $duration;

    /**
     * @example b72425bd-7871-4050-838e-033d80d754b7
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 1579068424883
     *
     * @var int
     */
    public $planedTime;

    /**
     * @example ade80092-03d9-4f4d-ad4f-ab8a247d3150
     *
     * @var string
     */
    public $scenarioId;

    /**
     * @example Succeeded
     *
     * @var string
     */
    public $status;

    /**
     * @example ff44709e-39a6-43ba-959b-20fcabe3e496
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'actualTime'    => 'ActualTime',
        'brief'         => 'Brief',
        'callId'        => 'CallId',
        'calledNumber'  => 'CalledNumber',
        'callingNumber' => 'CallingNumber',
        'chatbotId'     => 'ChatbotId',
        'contact'       => 'Contact',
        'conversation'  => 'Conversation',
        'duration'      => 'Duration',
        'jobId'         => 'JobId',
        'planedTime'    => 'PlanedTime',
        'scenarioId'    => 'ScenarioId',
        'status'        => 'Status',
        'taskId'        => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Contact'] = null !== $this->contact ? $this->contact->toMap() : null;
        }
        if (null !== $this->conversation) {
            $res['Conversation'] = [];
            if (null !== $this->conversation && \is_array($this->conversation)) {
                $n = 0;
                foreach ($this->conversation as $item) {
                    $res['Conversation'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return tasks
     */
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
                $n                   = 0;
                foreach ($map['Conversation'] as $item) {
                    $model->conversation[$n++] = null !== $item ? conversation::fromMap($item) : $item;
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
