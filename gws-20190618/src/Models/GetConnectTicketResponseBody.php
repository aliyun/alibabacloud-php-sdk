<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gws\V20190618\Models;

use AlibabaCloud\Tea\Model;

class GetConnectTicketResponseBody extends Model
{
    /**
     * @var string
     */
    public $ticket;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $taskFinished;
    protected $_name = [
        'ticket'       => 'Ticket',
        'taskId'       => 'TaskId',
        'requestId'    => 'RequestId',
        'taskFinished' => 'TaskFinished',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ticket) {
            $res['Ticket'] = $this->ticket;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskFinished) {
            $res['TaskFinished'] = $this->taskFinished;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetConnectTicketResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ticket'])) {
            $model->ticket = $map['Ticket'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskFinished'])) {
            $model->taskFinished = $map['TaskFinished'];
        }

        return $model;
    }
}
