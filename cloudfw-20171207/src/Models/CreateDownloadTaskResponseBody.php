<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class CreateDownloadTaskResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example E7F333E0-7B70-54DA-A307-4B2B49DEE923
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the task. Valid values:
     *
     * expire: The task file is invalid and cannot be downloaded.
     * @example start
     *
     * @var string
     */
    public $status;

    /**
     * @description The unique ID of the task.
     *
     * @example 132
     *
     * @var int
     */
    public $taskId;

    /**
     * @description The name of the file download task.
     *
     * @example Internet Boundary Firewall Assets - IPv4
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'requestId' => 'RequestId',
        'status'    => 'Status',
        'taskId'    => 'TaskId',
        'taskName'  => 'TaskName',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDownloadTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
