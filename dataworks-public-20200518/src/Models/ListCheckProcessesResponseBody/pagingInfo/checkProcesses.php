<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListCheckProcessesResponseBody\pagingInfo;

use AlibabaCloud\Dara\Model;

class checkProcesses extends Model
{
    /**
     * @var string
     */
    public $eventCode;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $eventNameEn;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $processId;

    /**
     * @var string
     */
    public $processName;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'eventCode' => 'EventCode',
        'eventName' => 'EventName',
        'eventNameEn' => 'EventNameEn',
        'messageId' => 'MessageId',
        'operator' => 'Operator',
        'processId' => 'ProcessId',
        'processName' => 'ProcessName',
        'projectId' => 'ProjectId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventCode) {
            $res['EventCode'] = $this->eventCode;
        }

        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }

        if (null !== $this->eventNameEn) {
            $res['EventNameEn'] = $this->eventNameEn;
        }

        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }

        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }

        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }

        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['EventCode'])) {
            $model->eventCode = $map['EventCode'];
        }

        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }

        if (isset($map['EventNameEn'])) {
            $model->eventNameEn = $map['EventNameEn'];
        }

        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }

        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }

        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
