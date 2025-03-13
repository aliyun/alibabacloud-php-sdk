<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetCoordinateTicketResponseBody extends Model
{
    /**
     * @description The ID of the stream collaboration.
     *
     * @example co-0sot77uale3****
     *
     * @var string
     */
    public $coId;

    /**
     * @description The request ID.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the cloud computer connection task.
     *
     * @example 39cc15e5-6998-4b9f-9b2c-7a4cc3e2****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The task status.
     *
     * Possible values:
     *
     *   Finished
     *
     * <!-- -->
     *
     *   Failed
     *
     * <!-- -->
     *
     *   Running
     *
     * <!-- -->
     * @example Finished
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @description The credentials of the stream collaboration.
     *
     * @example W0VuY29kaW5nXQ0KSW5wdXRFbmNvZGluZz1V********
     *
     * @var string
     */
    public $ticket;
    protected $_name = [
        'coId'       => 'CoId',
        'requestId'  => 'RequestId',
        'taskId'     => 'TaskId',
        'taskStatus' => 'TaskStatus',
        'ticket'     => 'Ticket',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coId) {
            $res['CoId'] = $this->coId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
     * @return GetCoordinateTicketResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CoId'])) {
            $model->coId = $map['CoId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
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
