<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetConnectionTicketResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the cloud computer connection task.
     *
     * @example 2afbad19-778a-4fc5-9674-1f19c638****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The task status.
     *
     * Valid values:
     *
     *   FAILED: The credential fails to be obtained.
     *
     * <!-- -->
     *
     *   RUNNING: The credential is being obtained.
     *
     * <!-- -->
     *
     *   FINISHED: The credential is obtained.
     *
     * <!-- -->
     * @example FINISHED
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @description The credential that is returned to connect to the cloud computer. Before you use the credential, you must Base64 decode the content of the credential, save the credential as an xxx.ica file, and then open the file. Python sample code:
     *
     * response = {
     * "Ticket": "W0VuY29kaW5nXQ0KSW5wdXRFbmNvZGluZz1V********",
     * "RequestId": "1CBAFFAB-B697-4049-A9B1-67E1FC5F****",
     * f.close()
     * @example W0VuY29kaW5nXQ0KSW5wdXRFbmNvZGluZz1V********
     *
     * @var string
     */
    public $ticket;
    protected $_name = [
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
     * @return GetConnectionTicketResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
