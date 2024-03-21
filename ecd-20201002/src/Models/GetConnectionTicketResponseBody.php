<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Tea\Model;

class GetConnectionTicketResponseBody extends Model
{
    /**
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $taskCode;

    /**
     * @example 2afbad19-778a-4fc5-9674-1f19c63862da
     *
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskMessage;

    /**
     * @example FINISHED
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @example W0VuY29kaW5nXQ0KSW5wdXRFbmNvZGluZz1V********
     *
     * @var string
     */
    public $ticket;
    protected $_name = [
        'requestId'   => 'RequestId',
        'taskCode'    => 'TaskCode',
        'taskId'      => 'TaskId',
        'taskMessage' => 'TaskMessage',
        'taskStatus'  => 'TaskStatus',
        'ticket'      => 'Ticket',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskCode) {
            $res['TaskCode'] = $this->taskCode;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskMessage) {
            $res['TaskMessage'] = $this->taskMessage;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->ticket) {
            $res['Ticket'] = $this->ticket;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetConnectionTicketResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskCode'])) {
            $model->taskCode = $map['TaskCode'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskMessage'])) {
            $model->taskMessage = $map['TaskMessage'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['Ticket'])) {
            $model->ticket = $map['Ticket'];
        }

        return $model;
    }
}
