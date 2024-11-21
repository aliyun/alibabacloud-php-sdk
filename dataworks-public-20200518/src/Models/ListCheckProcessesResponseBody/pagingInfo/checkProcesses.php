<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListCheckProcessesResponseBody\pagingInfo;

use AlibabaCloud\Tea\Model;

class checkProcesses extends Model
{
    /**
     * @example commit-file
     *
     * @var string
     */
    public $eventCode;

    /**
     * @example DnsEvent
     *
     * @var string
     */
    public $eventName;

    /**
     * @example Pre-event for Node Commit
     *
     * @var string
     */
    public $eventNameEn;

    /**
     * @example b824a5de-4223-4315-af3e-c4449d236db4
     *
     * @var string
     */
    public $messageId;

    /**
     * @example 297635
     *
     * @var string
     */
    public $operator;

    /**
     * @example rdk_generate_d395da25-b0d3-4114-b2a5-d0247444a661_none_3496903_365203
     *
     * @var string
     */
    public $processId;

    /**
     * @example odps_sql_test
     *
     * @var string
     */
    public $processName;

    /**
     * @example 32563
     *
     * @var int
     */
    public $projectId;

    /**
     * @example CHECKING
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'eventCode'   => 'EventCode',
        'eventName'   => 'EventName',
        'eventNameEn' => 'EventNameEn',
        'messageId'   => 'MessageId',
        'operator'    => 'Operator',
        'processId'   => 'ProcessId',
        'processName' => 'ProcessName',
        'projectId'   => 'ProjectId',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return checkProcesses
     */
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
