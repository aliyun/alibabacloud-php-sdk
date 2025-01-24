<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Dara\Model;

class GetConnectionTicketResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $taskCode;
    /**
     * @var string
     */
    public $taskId;
    /**
     * @var string
     */
    public $taskMessage;
    /**
     * @var string
     */
    public $taskStatus;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
