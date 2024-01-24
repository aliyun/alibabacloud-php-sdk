<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class SubmitSqlFlashbackTaskResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example DSSDF-SEWE-*****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the database creation failure records were removed from the DRDS instance.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The ID of the replication task.
     *
     * @example 1111
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'requestId' => 'RequestId',
        'success'   => 'Success',
        'taskId'    => 'TaskId',
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitSqlFlashbackTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
