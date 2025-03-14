<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\GetMailTaskStatusResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description Execution time, in the format yyyy-MM-dd HH:mm:ss
     *
     * @example 2024-10-09 17:34:11
     *
     * @var string
     */
    public $execTime;

    /**
     * @description Mail ID
     *
     * @example c38f73f4c5*****c808c41b3f4d23b7852
     *
     * @var string
     */
    public $mailId;

    /**
     * @description Mail status. Possible values:
     *
     * - Success: SENT
     * - Failure: FAILED
     * - In Progress: PROCESSING
     *
     * @example SENT
     *
     * @var string
     */
    public $status;

    /**
     * @description Task ID
     *
     * @example 1282xxx610816
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'execTime' => 'execTime',
        'mailId' => 'mailId',
        'status' => 'status',
        'taskId' => 'taskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->execTime) {
            $res['execTime'] = $this->execTime;
        }
        if (null !== $this->mailId) {
            $res['mailId'] = $this->mailId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['execTime'])) {
            $model->execTime = $map['execTime'];
        }
        if (isset($map['mailId'])) {
            $model->mailId = $map['mailId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
