<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gws\V20190618\Models;

use AlibabaCloud\Tea\Model;

class GetConnectTicketResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $ticket;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var bool
     */
    public $taskFinished;
    protected $_name = [
        'requestId'    => 'RequestId',
        'ticket'       => 'Ticket',
        'taskId'       => 'TaskId',
        'taskFinished' => 'TaskFinished',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('ticket', $this->ticket, true);
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('taskFinished', $this->taskFinished, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ticket) {
            $res['Ticket'] = $this->ticket;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskFinished) {
            $res['TaskFinished'] = $this->taskFinished;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetConnectTicketResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Ticket'])) {
            $model->ticket = $map['Ticket'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskFinished'])) {
            $model->taskFinished = $map['TaskFinished'];
        }

        return $model;
    }
}
